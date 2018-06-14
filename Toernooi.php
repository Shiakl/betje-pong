<?php
//$conn = new \PDO("mysql:host=localhost:3306;dbname=p4-bp;", "root", "");
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "p4-bp");
$idlid = 1;
//$query = $conn->prepare('SELECT * FROM lid WHERE id = ?');
$result = mysqli_query($link, 'SELECT * FROM lid');
echo "<table>";

?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HTML Table With PHP</title>
    </head>
    <body>
        <table id= "tableId" border="2">
            <?php $ifbool = TRUE;
             
            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                echo "<tr><td>";
                if ($ifbool === TRUE) {
                    echo "<i><b>ID</b></i>" . "</td><td>" .
                    "<i><b>V_NAAM</b></i>" . "</td><td>" .
                    "<i><b>A_NAAM</b></i>" ."</td></tr>";
                    $ifbool = FALSE;
                }
                else {
                     echo $row['id'] . "</td><td>" .                      
                     $row['v_naam'] . "</td><td>" .
                     $row['a_naam'] . "</td></tr>"; }}
                     //"<input type='checkbox' name='vehicle' value='Bike'> <br>" . "</td><td>" . //indien we checkboxes willen gebruiken
                     $ifbool = TRUE; ?>
        </table>
    
        <script>
        function addRowHandlers() {
            var table = document.getElementById("tableId");
            var rows = table.getElementsByTagName("tr");
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