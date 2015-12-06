<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Second Chance Association- Advertising a Job</title>
			<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
			<meta http-equiv="refresh" content="60" />
			<link rel="stylesheet" href="./css/style1.css">
	</head>
	<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL ^ E_NOTICE);
	$servername = "oniddb.cws.oregonstate.edu";
	$username = "acklesb-db";
	$password = "cWwPMQekP8Vuk0fn";
	$dbname = "acklesb-db";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	$searchString = $_POST["Name"];
	$insert = "INSERT INTO Felons(Name, Age, Location, ParoleOfficer, Crime, Release)
				VALUES ('$Name','$Age','$location','$ParoleOfficer','$Crime','$Release')"; 
	$add = mysqli_query($mysql_handle, $insert);
	if(!$add){
		die('could not enter student info: ' .mysql_error());
	}
	<h1>The information has been added to the database</h1>
	mysqli_close($conn);
?>
	</body>
</html>
