<?php  
    include_once 'Login.inc.php';

    $vnaam = $_POST['v_naam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $a_naam = $_POST['a_naam'];
    $adres = $_POST['adres'];
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
     
    $sql = "INSERT INTO lid (v_naam, tussenvoegsel, a_naam, adres, huisnummer, postcode, woonplaats, email, telefoon) VALUES ('$vnaam', ' $tussenvoegsel', '$a_naam', '$adres', '$huisnummer', '$postcode', '$woonplaats', '$email', '$telefoonnummer');";
    $result = mysqli_query($conn, $sql);
    header("Location: ../Leden_Overzicht.php?Lid_Toegevoegd=Succes");
    ?>

