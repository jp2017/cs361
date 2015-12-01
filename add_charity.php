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
            <title>Add a new charity</title>
            <div>
                <H2>Add a new Charity to the database</H2>
            </div>
            <form action="submit_charity.php" method="post">
                <table class="charity_input">
                    <tr class="add_charity">
                        <td>
                            <h3>Charity Name:</h3>
                        </td>
                        <td>
                            <input class="charity_input_field" type="text" name="charity_name">
                        </td>
                    </tr>
                        
                    <tr class="add_charity">
                        <td>
                            <h3>Charity Services:</h3>
                        </td>
                        <td>
                            <input class="charity_input_field" type="text" name="charity_services">
                        </td>
                    </tr>
                        
                    <tr class="add_charity">
                        <td>
                            <h3>Charity Location:</h3>
                        </td>
                        <td>
                            <input class="charity_input_field" type="text" name="charity_location">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <h3>Charity Description:</h3>
                            <textarea rows="7" cols="100" name="charity_description">
                            </textarea>    
                        </td>
                    </tr>
                </table>
            
                <button type="submit" value="submit">Submit</button>
            </form>
    
    
        </div>
    </body>
    <footer>
        <? include 'bottom.php'?>
    </footer>
</html>   