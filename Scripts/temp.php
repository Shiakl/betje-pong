<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action = "onsubmit.php" method = "POST">  
    <h4>Selecteer de hoeveelheid deelnemers :<select name="numOfPlayers">
    <option value="6">6</option>
    <option value="8">8</option>
    <option value="10">10</option>
    </select></h4>
    <h4>Selecteer type match: <select name="typeMatch">
    <option value="0">1v1</option>
    <option value="1">2v2</option>
    </select></h4>
        <h4>Datum wedstrijd: <input type="date" name="date" id= "iddate" required></h4>
        <button type="submit" name = "submit">Maak wedstrijd</button>
    </form>  

    
    
</body>
</html>

<script>
    //Deze functie returned de waarde van de dropdown menu als een string(die kan je dus casten naar int om te gebruiken)
    function returnAmount(){
        var e = document.getElementById("numofplayers");
        var strUser = e.options[e.selectedIndex].text;
        return strUser;
    }

    function check_hoeveelheid(){
        //Roep dit aan wanneer er een lid geselecteerd wordt om te kijken of het er minder zijn dan de aangegeven hoeveelheid.
    }
</script>
