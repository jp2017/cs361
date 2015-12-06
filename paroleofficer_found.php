<!DOCTYPE html>
<html>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Second Chance Association- Parole Officer Found</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="refresh" content="60" />
	<link rel="stylesheet" href="./css/style1.css">
</head>

<body>
<?php
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
	
	$searchString = $_POST["felon"];
	$sql = "SELECT `Parole Officers`.Name, `Parole Officers`.Phone, `Parole Officers`.Email FROM Felons, `Parole Officers`
WHERE Felons.Name = 'Jane Doe' AND Felons.`Parole Officer` = `Parole Officers`.Name";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<br>Name: " . $row["Name"] . "<br>Phone " . $row["Phone"] . "<br>Email: " . $row["Email"] . "<br>";
		}
	}
	else
	{
		echo "0 results";
	}

	mysqli_close($conn);
?>
</body>

</html>