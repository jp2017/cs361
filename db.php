<?php

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'thenellt-db';
$dbuser = 'thenellt-db';
$dbpass = 'mDCkKilzmbUjHwzh';


$link = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");
$db_selected = mysql_select_db($dbname, $link)
    or die("Error selecting database: $dbname");


/*
$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
) or die("mysql_link die");
$db_selected = mysql_select_db(
   $db, 
   $link
) or die("db_selected die");
*/
?>
