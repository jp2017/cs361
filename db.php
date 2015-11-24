<?php

$user = 'root';
$password = 'root';
$db = 'homework5';
$host = 'localhost';
$port = 3306;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
) or die("mysql_link die");
$db_selected = mysql_select_db(
   $db, 
   $link
) or die("db_selected die");

echo "success";
?>
