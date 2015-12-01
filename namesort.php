<?php
    
    $res = mysql_query("SELECT charityname, description, services, location FROM charities ORDER BY charityname ASC");
    if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    }

    $rows = mysql_num_rows($res);

    //echo $rows;

    //usort($result, "cmp");

    for($i = 0; $i < $rows; $i++){
        $row = mysql_fetch_array($res);
        echo "<tr>";
        echo "<td class= 'ctitle0' <h3>";
        echo $row[0];
        echo "</h3></td>";
        echo "<td class= 'ctitle1' <h3>";
        echo $row[1];
        echo "</h3></td>";
        echo "<td class= 'ctitle2' <h3>";
        echo $row[2];
        echo "</h3></td>";
        echo "<td class= 'ctitle3' <h3>";
        echo $row[3];
        echo "</h3></td>";

        echo "</tr>";
    }
?>