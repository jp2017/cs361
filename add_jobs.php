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
	This is where you can create a job you would like to advertise to felons.
	Items with an * are required and cannot be left empty.

	<form action="add_jobs_db.php" method="post">
	*Name: <input type="text" name="name">
	<br>
	Description: <input type="text" name="description">
	<br>
	*Occupation: <input type="text" name="occupation">
	<br>
	*Location: <input type="text" name="location">
	<br>
	<input type="submit" name="Go">
	</form>
</body>

</html>