<!DOCTYPE html>
<html>
<body>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

if($_POST["housesChoice"] == "location")
{
	?>

	<form action="submission_houses_location.php" method="post">
	Location:<br>
	<input type="text" name="location">
	<br>
	<input type="submit" value="go">
	</form>
	
<?php 
}
else if($_POST["housesChoice"] == "price")
{
	?>

	<form action="submission_houses_price.php" method="post">
	Price:<br>
	<input type="text" name="price">
	<br>
	<input type="submit" value="go">
	</form>
<?php 
}
?>

</body>
</html>