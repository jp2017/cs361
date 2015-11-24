<?php
    echo "got here ";
    //include 'db.php';
    $user = 'root';
    $password = 'root';
    $db = 'homework5';
    $host = 'localhost';
    $port = 3306;

    $link = mysql_connect(
       "$host:$port", 
       $user, 
       $password
    ) or die("mysql_link die");
    $db_selected = mysql_select_db(
       $db, 
       $link
    ) or die("db_selected die");
    
/*
    $result = mysql_query("SELECT charityname, location, description FROM charities");
    if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    }

    $row = mysql_fetch_row($result);

    
    echo $row[0]; 
    echo $row[1]; 
    echo $row[2];
*/
    
    $result = mysql_query("SELECT charityname, description, location FROM charities");
    if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    }

    $rows = mysql_num_rows($result);
    
    echo $rows;
    
    for($i = 0; $i < $rows; $i++){
        $row = mysql_fetch_array($result);
        for($x = 0; $x < 3; $x++){
            echo $row[$x];
            echo ", ";
        }
        //$currentrow = mysql_fetch_row($array)    
        //for($x = 0; $x < 3; $x++){
        //    echo $currentrow[$x];
        //}
    }
    

    /*
    $row = mysql_fetch_row($result);
    while($row){
        echo '<div id = "table" class = "table">';
        echo '<tr>';
        for($i = 0; $i < ($result - 1); $i++){
            echo "<td>";
            echo $row[$i];
            echo "</td>";
        }
        echo '</tr>';
        echo '</div>'
        $row = mysql_fetch_row($result);
    }
    */

    echo "got here ";
    
?>