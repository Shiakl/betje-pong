<?php
include_once 'Includes/Login.inc.php';
$sql = 'SELECT * FROM lid ORDER BY wedstrijden_gewonnen';
$result = mysqli_query($conn, $sql);

?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ranking</title>
        <link 
    </head>
    <body>
    <table id= "tableId" border="1">
            <?php   
            echo "<tr><th>";
            echo "<i><b>V_NAAM</b></i>" . "</th><th>" .
            "<i><b>A_NAAM</b></i>" . "</th><th>" .
            "<i><b>GEWONNEN<br>WEDSTRIJDEN</b></i>" ."</th></tr>";
         
            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results             
                     echo "<tr><td>";
                     echo $row['v_naam'] . "</td><td>" .                      
                     $row['a_naam'] . "</td><td>" .
                     $row['wedstrijden_gewonnen'] . "</td></tr>"; }
                     //"<input type='checkbox' name='vehicle' value='Bike'> <br>" . "</td><td>" . //indien we checkboxes willen gebruiken
                      ?>
        </table>
    </body>
</html>