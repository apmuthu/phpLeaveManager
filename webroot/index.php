<?php
// See docs/LoginNotes.md for info on usernames and passwords

define ('PHPLM_NAME',    'PHP Leave Manager');
define ('PHPLM_UPLOADS', 'data/');
define ('PHPLM_DBNAME',  'phplm');
define ('PHPLM_DBHOST',  'localhost');
define ('PHPLM_DBUSER',  'root');
define ('PHPLM_DBPASS',  '');
define ('PHPLM_PERMKEY', '90e869455eb99f2d15dd8eb374972662'); // 32 char hex - change for each installation

function adminer_object() {
    // required to run any plugin
    include_once "./plugins/plugin.php";
    
    // autoloader
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }

    $plugins = array(
        // specify enabled plugins here
		new AdminerDumpZip,
        new AdminerTinymce,
        new AdminerFileUpload(PHPLM_UPLOADS),
        new AdminerSlugify,
        new AdminerTranslation,
        new AdminerForeignSystem,
		new AdminerEditCalendar,
		new AdminerLoginTable(PHPLM_DBNAME),
#       new AdminerDumpXml,
#		new AdminerTablesFilter,
#		new AdminerEditForeign,
    );

    // Combine customization and plugins:

    class AdminerCustomization extends AdminerPlugin {

		// Ref: http://sourceforge.net/p/adminer/discussion/960417/thread/647c8b5c/#103c
		var $operators = array("=", "<=", ">=");

		function name() {
			// custom name in title and heading
			return PHPLM_NAME;
		}
		
		function permanentLogin() {
		  // key used for permanent login
		  return PHPLM_PERMKEY;
		}
		
		function credentials() {
		  // server, username and password for connecting to database
		  return array(PHPLM_DBHOST, PHPLM_DBUSER, PHPLM_DBPASS);
		}
		
		function database() {
		  // database name, will be escaped by Adminer
		  return PHPLM_DBNAME;
		}

		function tableName($tableStatus) {
			// tables without comments would return empty string and will be ignored by Adminer
			return h($tableStatus["Comment"]);
		}

		function fieldName($field, $order = 0) {
			if ($order && preg_match('~_(md5|sha1)$~', $field["field"])) {
				return ""; // hide hashes in select
			}
			// display only column with comments, first 60 of them plus searched columns
			if ($order < 60) {
				return h($field["comment"]);
			}
			foreach ((array) $_GET["where"] as $key => $where) {
				if ($where["col"] == $field["field"] && ($key >= 0 || $where["val"] != "")) {
					return h($field["comment"]);
				}
			}
			return "";
		}

    }
    return new AdminerCustomization($plugins);

}

// include original Adminer Editor
include "./editor-4.2.5-mysql-en.php";

?>