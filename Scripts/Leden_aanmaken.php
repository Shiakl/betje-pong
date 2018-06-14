
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
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
</body>
</html>

    
