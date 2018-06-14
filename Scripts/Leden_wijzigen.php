<?php
include_once 'Includes/Login.inc.php';
$sql = 'SELECT * FROM lid WHERE id = 1';
$result = mysqli_query($conn, $sql);

?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HTML Table With PHP</title>
    </head>
    <body>
    <form action="Includes/WijzigLeden.inc.php" method="POST">
    <table id= "tableId" border="1">
            <?php
            echo "<tr><th>";
            echo "<i><b>ID</b></i>" . "</th><th>" .
            "<i><b>V_NAAM</b></i>" . "</th><th>" .
            "<i><b>TUSSENVOEGSEL</b></i>" . "</th><th>" .
            "<i><b>A_NAAM</b></i>" . "</th><th>" .
            "<i><b>ADRES</b></i>" . "</th><th>" .
            "<i><b>HUISNUMMER</b></i>" . "</th><th>" .
            "<i><b>POSTCODE</b></i>" . "</th><th>" .
            "<i><b>WOONPLAATS</b></i>" . "</th><th>" .
            "<i><b>E-MAIL</b></i>" . "</th><th>" .
            "<i><b>TELEFOON</b></i>" . "</th><th>" .
            "<i><b>GESCOORDE<br>PUNTEN</b></i>" . "</th><th>" .
            "<i><b>GESPEELDE<br>WEDSTRIJDEN</b></i>" . "</th><th>" .
            "<i><b>GEWONNEN<br>WEDSTRIJDEN</b></i>" ."</th></tr>"; 

            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                     echo "<tr><td><textarea name='idtx' readonly>";
                     echo $row['id'] . "</textarea></td><td><textarea name='v_naamtx'>" .                      
                     $row['v_naam'] . "</textarea></td><td><textarea name='tussenvoegseltx'>" .
                     $row['tussenvoegsel'] . "</textarea></td><td><textarea name='a_naamtx'>" .
                     $row['a_naam'] . "</textarea></td><td><textarea name='adrestx'>" .
                     $row['adres'] . "</textarea></td><td><textarea name='huisnummertx'>" .
                     $row['huisnummer'] . "</textarea></td><td><textarea name='postcodetx'>" .
                     $row['postcode'] . "</textarea></td><td><textarea name='woonplaatstx'>" .
                     $row['woonplaats'] . "</textarea></td><td><textarea name='emailtx' cols='15' readonly>" .
                     $row['email'] . "</textarea></td><td><textarea name='telefoontx'>" .
                     $row['telefoon'] . "</textarea></td><td><textarea name='punten_gescoordtx'>" .
                     $row['punten_gescoord'] . "</textarea></td><td><textarea name='wedstrijden_gespeeldtx'>" .
                     $row['wedstrijden_gespeeld'] . "</textarea></td><td><textarea name='wedstrijden_gewonnentx'>" .
                     $row['wedstrijden_gewonnen'] . "</textarea></td></tr>"; }
                      ?>
       
        </table> 
        <button type="submit" name"submit">Wijzig ingevulde gegevens</button>
        </form>
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