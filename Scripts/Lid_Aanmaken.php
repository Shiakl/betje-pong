<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betjepong | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body id = "bodylayout">
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
            <form action="Includes/VoegToe.inc.php" method="POST">
    <input type="text" name="v_naam" placeholder="Voornaam" required>
    <br>
    <input type="text" name="tussenvoegsel" placeholder="tussenvoegsel"> 
    <br>
    <input type="text" name="a_naam" placeholder="Achternaam" required> 
    <br>
    <input type="text" name="adres" placeholder="Adres" required> 
    <br>
    <input type="text" name="huisnummer" placeholder="Huisnummer" required> 
    <br>
    <input type="text" name="postcode" placeholder="Postcode" required pattern="[0-9]{4}[A-Za-z]{2}" title="Postcode moet voldoen aan de volgende layout: 1234 AB"> 
    <br>
    <input type="text" name="woonplaats" placeholder="Woonplaats" required> 
    <br>
    <input type="text" name="email" placeholder="E-Mail" required title="Vul een correct e-mailadres in"> 
    <br>
    <input type="text" name="telefoonnummer" placeholder="Telefoonnummer" required>  
    <br>
    <br>
    <button type="submit" name"submit">Voeg lid toe</button>
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
    
