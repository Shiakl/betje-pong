<?php
include_once 'Includes/Login.inc.php';
$sql = 'SELECT * FROM lid';
$result = mysqli_query($conn, $sql);

?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Selecteer spelers</title>
    </head>
    <body>
    <form action = "Matchmaker.php" method = POST>
    <h4>Selecteer de hoeveelheid deelnemers :<select name="numOfPlayers">
    <option value="6">6</option>
    <option value="8">8</option>
    <option value="10">10</option>
    </select></h4>
    <h4>Selecteer type match: <select name="typeMatch">
    <option value="1">1v1</option>
    <option selected="selected" value="2">2v2</option>
    </select></h4>
        <h4>Datum wedstrijd: <input type="date" name="date" id= "iddate" required></h4>
    <table id= "tableId" border="1">
            <?php   
            echo "<thead>
            <tr>
            <th><i><b></b></i></th>
            <th><i><b>ID</b></i></th>
            <th><i><b>V_NAAM</b></i></th>
            <th><i><b>A_NAAM</b></i></th></tr></thead>";
            
            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results             
                    echo "<tbody>
                    <tr>". 
                    "<td>".   "<input type = 'checkbox' id ='".$row['id']."' name = 'player[]' value = '".$row['id']."' OnCLick = 'ChildCheckBoxClick(this)'></dr>".               
                    "<td>".$row['id']."</td>".
                    "<td>" .$row['v_naam'] . "</td>".
                    "<td>" .$row['a_naam'] . "</td></tr><tbody>"; 
                }  
            ?>           
    </table><br>
    <input type="submit" value = "Maak match">
    </form>

        <script>
    function ChildCheckBoxClick(checkbox)
    {
        var atleastOneCheckBoxUnchecked = false;
        var gridView = document.getElementById("tableId");

        for (i = 1; i < gridView.rows.length; i++)
        {
            // Depending on whether the checkbox in the data row is checked or
            // unchecked change the background color of the rows in the GridView
            if (gridView.rows[i].cells[0].getElementsByTagName("INPUT")[0].checked == false)
            {
                gridView.rows[i].style.background = '#FFFFFF';
                atleastOneCheckBoxUnchecked = true;
            }
            else
            {
                gridView.rows[i].style.background = '#CCCCCC';
            }
        }

        gridView.rows[0].cells[0].getElementsByTagName("INPUT")[0].checked
                                            = !atleastOneCheckBoxUnchecked;
    }
        </script>
    </body>
</html>