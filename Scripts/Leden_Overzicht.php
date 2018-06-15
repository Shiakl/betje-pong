<?php
include_once 'Includes/Login.inc.php';
$sql = 'SELECT * FROM lid';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betjepong | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
        <!-Header of Banner van de website met nav menu ->
    <header>
        <div class = "container">
            <div id = "branding">
                <h1> <span class = "highlight">Betje</span> <span class = "highlight2"> Pong</span> <b>Tafeltennis vereniging</b></h1>
            </div>
            <nav>
                <ul>
                    <li><a href ="index.html">Home</a></li>
                    <li><a href= "index.html">Wedstrijden</a></li>
                    <li><a href= "Ranking.php">Ranking</a></li>
                    <li class = "current"><a href= "Leden_Overzicht.php">Leden</a></li>
                    <li><a href= "index.html">Werknemers</a></li>
                </ul>
            </nav>  
        </div>
    </header>
    <!- Inhoudelijk deel->
    <section id = "boxes">
        <div class = "container">
        <form method="POST">
    <table class= "tableid" border="1">
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
            "<i><b>GEWONNEN<br>WEDSTRIJDEN</b></i>" ."</th><th colspan = '2'>" .
            "<button class = 'AddButton' style='height:40px;' formaction='Lid_Aanmaken.php'> <img src='img/Plus.ico' height='20' width='20' /> <br> Add Leden</button>" ."</th></tr>"; 

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
                     echo "<button class = 'buttonlayout' formaction='Lid_Wijzigen.php' type='submit' name ='submit' value='".$idValue."'>" . "<img src='img/Update.ico' height='20' width='20' />" . "</button>"  . "</td><th>";
                     echo "<button class = 'buttonlayout' formaction='Includes/Lid_Delete.inc.php' data-confirm='Bent u er zeker van dat u deze persoon wilt verwijderen?' type='submit' name ='submit' value='".$idValue."'>" . "<img src='img/Delete.ico' height='20' width='20' />" . "</button>". "</th></tr>"; }
                      ?>
        </table> 
        </form>
        </div>

    </section>

    <!- Nieuwsletter->
    <section id = "newsletter">
        <div class = "container">
        </div>
    </section>

    <!- Footer->
    <section id = "footer">
            <div class = "container">
                <p>Betjepong Tafeltennis vereniging, Copyright &copy;2018 </p>
            </div>
        </section>

</body>
</html>