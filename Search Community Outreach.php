<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL ^ E_NOTICE);
	$servername = "oniddb.cws.oregonstate.edu";
	$username = "acklesb-db";
	$password = "cWwPMQekP8Vuk0fn";
	$dbname = "acklesb-db";
	$conn = mysqli_connect($servername, $username, $password, $dbname);	//connect to database
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error()); 	//if can't connect to server
	}
	$searchString = $_POST["Community_Programs"];				//looking for community programs
	$sql = "SELECT * FROM community_Services WHERE location='$searchString'";	//get all the community programs
	$result = mysqli_query($conn, $sql);								//get the results from the database
	$count = mysql_num_rows($result);
	echo "<br>There are " . count . " community programs in your area.";
	if ($count > 0){													//if there are any items returned
		while($row = mysqli_fetch_assoc($result)){						
			echo "<br>Name: " . $row["Name"];
			echo "<br>Description: " . $row["Description"];
			echo "<br>Services: " . $row["Service"];
			echo "<br>Location: " . $row["Location"] . "<br>";
		}
	}
	else{
		echo "0 results";
	}
	mysqli_close($conn);
?>
