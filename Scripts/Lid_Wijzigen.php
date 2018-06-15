<?php
include_once 'Includes/Login.inc.php';
$lidIDtx = $_POST['submit'];
$sql = "SELECT * FROM lid WHERE id = $lidIDtx";
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
                    <li class = "current"><a href= "Ranking.php">Ranking</a></li>
                    <li><a href= "Leden_Overzicht.php">Leden</a></li>
                    <li><a href= "index.html">Werknemers</a></li>
                </ul>
            </nav>  
        </div>
    </header>
    <!- Inhoudelijk deel->
    <section id = "boxes">
        <div class = "container">
        <form action="Includes/WijzigLeden.inc.php" method="POST">
    <table class = "tableid" border="1">
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
                     echo "<tr><td><textarea name='idtx' readonly cols = '4'>";
                     echo $row['id'] . "</textarea></td><td><textarea name='v_naamtx' cols = '6'>" .                      
                     $row['v_naam'] . "</textarea></td><td><textarea name='tussenvoegseltx' cols = '13'>" .
                     $row['tussenvoegsel'] . "</textarea></td><td><textarea name='a_naamtx' cols = '6'>" .
                     $row['a_naam'] . "</textarea></td><td><textarea name='adrestx' cols = '5'>" .
                     $row['adres'] . "</textarea></td><td><textarea name='huisnummertx' cols = '10'>" .
                     $row['huisnummer'] . "</textarea></td><td><textarea name='postcodetx' cols = '8'>" .
                     $row['postcode'] . "</textarea></td><td><textarea name='woonplaatstx' cols = '10'>" .
                     $row['woonplaats'] . "</textarea></td><td><textarea name='emailtx' cols='15' readonly >" .
                     $row['email'] . "</textarea></td><td><textarea name='telefoontx' cols = '10'>" .
                     $row['telefoon'] . "</textarea></td><td><textarea name='punten_gescoordtx' cols = '9'>" .
                     $row['punten_gescoord'] . "</textarea></td><td><textarea name='wedstrijden_gespeeldtx' cols = '11'>" .
                     $row['wedstrijden_gespeeld'] . "</textarea></td><td><textarea name='wedstrijden_gewonnentx' cols = '11'>" .
                     $row['wedstrijden_gewonnen'] . "</textarea></td></tr>"; }
                      ?>
       
        </table> 
        <button class = "buttonlayout" type="submit" name"submit">Wijzig ingevulde gegevens</button>
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