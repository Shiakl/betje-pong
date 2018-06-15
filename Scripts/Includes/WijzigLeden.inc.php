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
    $pntGescoord = $_POST['punten_gescoordtx'];
    $wdstrdGespeeld = $_POST['wedstrijden_gespeeldtx'];    
    $gwnWedstrijden = $_POST['wedstrijden_gewonnentx'];

    $lidQuery = "UPDATE `betjepong`.`lid` SET `v_naam`='$vnaamtx', `tussenvoegsel`='$tussenvoegseltx', `a_naam`='$a_naamtx', `adres`='$adrestx', `huisnummer`='$huisnummertx', `postcode`='$postcodetx', `woonplaats`='$woonplaatstx', `telefoon`='$telefoonnummertx', `punten_gescoord`='$pntGescoord', `wedstrijden_gespeeld`='$wdstrdGespeeld', `wedstrijden_gewonnen`='$gwnWedstrijden' WHERE `id`='$idtx'";
    $result = mysqli_query($conn, $lidQuery);
    header("Location: ../Leden_Overzicht.php?Lid_Gewijzigd=Succes");
    ?>

