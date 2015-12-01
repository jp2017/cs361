
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Second Chance Association</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="refresh" content="60" />
        <link rel="stylesheet" href="/css/style1.css">
        <?php include 'db.php' ?>
        <? include 'navbar.php' ?>
    </head>
    <body>
        <div id="page" class="bodypage">
            <div id="content">
                
                <div>
                    <H1>Charity Information</H1>
                </div>
                <div id="table">
                    <table class="charityclass">
                        <tr id="title" class="title">
                            <td><a href="charities_name.php">Name:</a></td>
                            <td><H2>Description:</H2></td>
                            <td><H2>Services:</H2></td>
                            <td><a href="charities_location.php">Location:</a></td>
                            <?php
    
                                $res = mysql_query("SELECT charityname, description, services, location FROM charities ORDER BY location ASC");
                                if (!$res) {
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
                        </tr>
                    </table>
                </div>
            </div>
            <footer>
                <? include 'bottom.php'?>
            </footer>
        </div>
    </body>
</html>              
                