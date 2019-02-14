<?php 

### EDIT HERE ###

// DB CONNECT INFO
$db_host = "localhost"; //hostname
$db_name = "attendex"; //database name
$db_user = "root"; //username
$db_pw = ""; //password of database

// DB TABLE INFO
#Only change if you have edited the table names#
$GLOBALS['hits_table_name'] = "Hits_Table"; 
$GLOBALS['info_table_name'] = "Info_Table";

### STOP EDITING HERE ###

// CONNECT TO DB
try {   
	$GLOBALS['db'] = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pw, array(PDO::ATTR_PERSISTENT => false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));  
}  
catch(PDOException $e) {  
    echo $e->getMessage();
}

?>