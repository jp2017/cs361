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
	
	if (empty($_POST["name"]) || empty($_POST["occupation"]) || empty($_POST["location"]))	# Checking required fields
	{
			echo "You did not fill all required values. Please go back and resubmit the form.";
	}
	else
	{	
		$servername = "oniddb.cws.oregonstate.edu";
		$username = "nichokyl-db";
		$password = "1hvHqfNBEOL6iwL9";
		$dbname = "nichokyl-db";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "INSERT INTO Jobs VALUES ('" . $_POST["name"] . "', '" . $_POST["description"] . "', '" . $_POST["occupation"] . "', '" . $_POST["location"] . "')";

		$result = mysqli_query($conn, $sql);

		echo "Successfully added!";
		
		mysqli_close($conn);
	}
?>
</body>

</html>