<?php
if(!empty($_POST["naam"]) && !empty($_POST["ww"]))
{
    $naam = $_POST["naam"];
    $wachtwoord = $_POST["ww"];
}

$show = new \PDO("mysql:host=localhost:3306;dbname=test;", "root", "0805");
$query = $show->prepare('INSERT INTO `test`.`user` (`ID`, `Gebruikersnaam`, `Wachtwoord`) VALUES (:id , :naam, :wachtwoord)');

if(!empty($_POST["naam"]) && !empty($_POST["ww"]))
{
    $query->execute(['id' => 0, 'naam' => $naam, 'wachtwoord' => $wachtwoord]);
}

$result= $query->fetchAll();
var_dump($result);
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form action="create.php" method="POST">
        Gebruikersnaam: <input type="text" name="naam"><br>
        Wachtwoord: <input type="text" name="ww"><br>
<input type="submit" value="Send!"><b
</form>

<script>

if($naam === $naam)
{
    alert("Gebruikersnaam is al in gebruik.");
}
</script>

</body>
</html>