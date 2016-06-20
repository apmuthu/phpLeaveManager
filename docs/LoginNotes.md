## Create the login table and populate it with a user
````
CREATE TABLE login (
	id int NOT NULL AUTO_INCREMENT, -- optional
	login varchar(30) NOT NULL, -- any length
	password_sha1 char(40) NOT NULL,
	UNIQUE (login),
	PRIMARY KEY (id)
);

INSERT INTO login VALUES (NULL, 'admin', SHA1('pwd123'));
````

On login, the following files get created:
````
/tmp/adminer.invalid
/tmp/adminer.key
````
For an example login, the following arrays and their contents are:
````
$_REQUEST Array
(
    [username] => admin
    [select] => leaves
    [where] => Array
        (
            [LeaveID] => 1
        )
    [adminer_sid] => 0k34vupvkh4va8lch4k48466r5
    [adminer_key] => ddea231087250de6d4f79506abd650bf
    [adminer_permanent] => c2VydmVy--YWRtaW4=-:fnPJHGytE4k+s7s2
    [adminer_version] => 4.2.5
)

$_GET Array
(
    [username] => admin
    [edit] => leaves
    [where] => Array
        (
            [LeaveID] => 1
        )

)
````
The default values in the above $_REQUEST['adminer_permanent'] variable are:
````
base64_encode('server') => c2VydmVy
base64_encode('admin') => YWRtaW4=
````
