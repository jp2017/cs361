<!DOCTYPE html>
<html>
<body>

<?php
//echo "connected succesfully <br>";
if($_POST["choice"] == "jobs")
{
	?>

	Search by: <br>
	<form action="search_jobs.php" method="post">
	<input type="radio" name="jobsChoice" value="occupation">Occupation
	<br>
	<input type="radio" name="jobsChoice" value="location">Location
	<br>
	<input type="submit" value="go">
	</form>
	
<?php 
}
else if($_POST["choice"] == "houses")
{
	?>

	Search by: <br>
	<form action="search_houses.php" method="post">
	<input type="radio" name="housesChoice" value="location">Location
	<br>
	<input type="radio" name="housesChoice" value="price">Price
	<br>
	<input type="submit" value="go">
	</form>
	
<?php 
}
?>

</body>
</html>