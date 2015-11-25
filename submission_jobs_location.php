<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

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

//echo $_POST["jobsChoice"];

//$sql = "SELECT * FROM Jobs WHERE Location='Cashier'";

$searchString = $_POST["location"];
$sql = "SELECT * FROM Jobs WHERE Location='$searchString'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
	{
        echo "<br>Name: " . $row["Name"] . "<br>Description: " . $row["Description"] . "<br>Occupation: " . $row["Occupation"] . "<br>Location: " . $row["Location"] . "<br>";
    }
}
else
{
    echo "0 results";
}

mysqli_close($conn);

?>