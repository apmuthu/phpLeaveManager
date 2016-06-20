<?php
include "./defines.php";

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
			$allowed_tables = Array('balances', 'designations', 'employees', 'leaves');
			if (in_array($tableStatus["Name"], $allowed_tables))
				return h($tableStatus["Comment"]);
			else 
				return '';
			}

		function fieldName($field, $order = 0) {
			if ($order && preg_match('~_(md5|sha1)$~', $field["field"])) {
				return ""; // hide hashes in select
			}

			// Hide AutoInc Primary keys during Insert
			if (isset($_GET['edit'])) {
				$hidePKfields = Array(
					Array('htable' => 'employees', 'hfield' => 'EmployeeID')
				  , Array('htable' => 'leaves', 'hfield' => 'LeaveID')
				);
				foreach ($hidePKfields as $val) {
				if ($_GET['edit'] == $val['htable'] && $field['field'] == $val['hfield'] && !isset($_GET['where'][$val['hfield']]))
					return "";
				}
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

		function selectLimitProcess() {
            return (isset($_GET["limit"]) ? $_GET["limit"] : PHPLM_PAGEDEFRECS);
        }

        function selectLimitPrint($limit) {
            echo "<fieldset><legend>" . lang('Limit') . "</legend><div>"; // <div> for easy styling
            echo html_select("limit", explode('|', PHPLM_PAGERECS), $limit);
            echo "</div></fieldset>\n";
        }

		function selectLink($val, $field) {
			if ($field['field'] == 'LeaveID' && $_GET['select'] == 'leaves' && $val !== NULL)
				return 'leave_summary.php?select=leaves&leaveid='.$val;
		}

    }
    return new AdminerCustomization($plugins);

}

// include original Adminer Editor
include "./editor-4.2.5-mysql-en.php";

?>