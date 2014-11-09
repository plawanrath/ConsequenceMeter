<?php
define("HOST", "localhost");
define("DBUSER", "plawanrath");
define("PASS", "plawanrath");
define("DB", "ConsequenceMeter");

$connect = mysql_connect(HOST,DBUSER,PASS);
if(!$connect)
{
	die('Could not connect');
	}
$db = mysql_select_db(DB);
if(!db)
{
	die('Could not connect to Database!!!');
	}

?>