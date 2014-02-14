<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$link = NULL;
$link = mysql_connect($host, $user, $password);
if (!$link) {
   die('Could not connect: ' . mysql_error());
}


//if($link) {echo 'Connected successfully';}
$db = mysql_select_db("name_of_your_database", $link);
if (!$db) {
   die('Could not connect to db: ' . mysql_error());
}
?>