<!DOCTYPE html>
<html>
<body>

<?php
if($_POST["jobsChoice"] == "occupation")
{
	?>

	<form action="submission_jobs_occupation.php" method="post">
	Occupation:<br>
	<input type="text" name="occupation">
	<br>
	<input type="submit" value="go">
	</form>
	
<?php 
}
else if($_POST["jobsChoice"] == "location")
{
	?>

	<form action="submission_jobs_location.php" method="post">
	Location:<br>
	<input type="text" name="location">
	<br>
	<input type="submit" value="go">
	</form>
<?php 
}
?>

</body>
</html>