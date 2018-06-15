<?php
include_once 'Includes/Login.inc.php';
$sql = 'SELECT * FROM lid';
$result = mysqli_query($conn, $sql);

?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HTML Table With PHP</title>
        
    </head>
    <body>
    <form method="POST">
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
            "<i><b>GEWONNEN<br>WEDSTRIJDEN</b></i>" ."</th><th>" .
            "<button style='height:40px;' formaction='Lid_Aanmaken.php'>Nieuw Lid Toevoegen</button>" ."</th></tr>"; 

            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                     echo "<tr><td>";
                     echo $row['id'] . "</td><td>" .                      
                     $row['v_naam'] . "</td><td>" .
                     $row['tussenvoegsel'] . "</td><td>" .
                     $row['a_naam'] . "</td><td>" .
                     $row['adres'] . "</td><td>" .
                     $row['huisnummer'] . "</td><td>" .
                     $row['postcode'] . "</td><td>" .
                     $row['woonplaats'] . "</td><td>" .
                     $row['email'] . "</td><td>" .
                     $row['telefoon'] . "</td><td>" .
                     $row['punten_gescoord'] . "</td><td>" .
                     $row['wedstrijden_gespeeld'] . "</td><td>" .
                     $row['wedstrijden_gewonnen'] . "</td><th>";
                     $idValue = $row['id']; 
                     echo "<button formaction='Lid_Wijzigen.php' type='submit' name ='submit' value='".$idValue."'>" . 'Wijzig' . "</button>" . "&emsp;" . "&emsp;" . "&nbsp;";
                     echo "<button formaction='Includes/Lid_Delete.inc.php' data-confirm='Bent u er zeker van dat u deze persoon wilt verwijderen?' type='submit' name ='submit' value='".$idValue."'>" . 'Delete' . "</button>". "</th></tr>"; }
                      ?>
        </table> 
        </form>
        <script>
$(function() {
    $("[data-confirm]").on('click submit', function(){
        return confirm($(this).data("confirm"));
    });
});
        </script>
    </body>
</html>