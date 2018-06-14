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
        <link 
    </head>
    <body>
    <table id= "tableId" border="1">
            <?php   
            echo "<tr><th>";
            echo "<i><b>ID</b></i>" . "</th><th>" .
            "<i><b>V_NAAM</b></i>" . "</th><th>" .
            "<i><b>A_NAAM</b></i>" ."</th></tr>";
         
            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results             
                     echo "<tr><td>";
                     echo $row['id'] . "</td><td>" .                      
                     $row['v_naam'] . "</td><td>" .
                     $row['a_naam'] . "</td></tr>"; }
                     //"<input type='checkbox' name='vehicle' value='Bike'> <br>" . "</td><td>" . //indien we checkboxes willen gebruiken
                      ?>
        </table>
    
        <script>
        function addRowHandlers() {
            var table = document.getElementById("tableId");
            var rows = table.getElementsByTagName("td");
            for (i = 1; i < rows.length; i++) {
                 var currentRow = table.rows[i];
                 var createClickHandler = 
                    function(row) 
            {
                return function() { 
                   
                                this.style.backgroundColor = "grey";
                                 };
            };

        currentRow.onclick = createClickHandler(currentRow);
    }
}
window.onload = addRowHandlers();
        </script>
    </body>
</html>