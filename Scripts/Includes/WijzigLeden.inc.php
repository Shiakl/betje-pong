<?php  
    include_once 'Login.inc.php';

    $emailgebruikt = FALSE;
    $idtx = $_POST['idtx'];
    $vnaamtx = $_POST['v_naamtx'];
    $tussenvoegseltx = $_POST['tussenvoegseltx'];
    $a_naamtx = $_POST['a_naamtx'];
    $adrestx = $_POST['adrestx'];
    $huisnummertx = $_POST['huisnummertx'];
    $postcodetx = $_POST['postcodetx'];
    $woonplaatstx = $_POST['woonplaatstx'];
    $telefoonnummertx = $_POST['telefoontx'];
    
    $query = 'SELECT email FROM lid';
    $result = mysqli_query($conn, $query);
    $sql = "UPDATE lid SET v_naam = '$vnaamtx', tussenvoegsel = '$tussenvoegseltx', a_naam = '$a_naamtx', adres = '$adrestx', huisnummer = '$huisnummertx', postcode = '$postcodetx', woonplaats = '$woonplaatstx', telefoon = '$telefoonnummertx' WHERE id = $idtx;";
    $result = mysqli_query($conn, $sql);
    header("Location: ../Leden_wijzigen.php?Lid_Gewijzigd=Succes");
    ?>

