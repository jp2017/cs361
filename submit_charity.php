<?php
    include 'db.php';

    $name = $_POST['charity_name'];
    $location = $_POST['charity_location'];
    $services = $_POST['charity_services'];
    $description = $_POST['charity_description'];
    
    $sql = "INSERT INTO charities (charityname, description, location, services, volunteer) VALUES ('$name', '$location', '$services', '$description', NULL)";
        
    $result = mysql_query($sql) or die(mysql_error());
    
    mysql_close($link);

    header('Location: index.php');
?>