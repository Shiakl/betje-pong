<?php
include_once 'Includes/Login.inc.php';
$sql = 'SELECT * FROM lid ORDER BY wedstrijden_gewonnen';
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
        <table class = "tableid" border="1">
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