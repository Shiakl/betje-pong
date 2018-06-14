<?php  
    include_once 'Login.inc.php';

    $emailgebruikt = FALSE;
    $vnaam = $_POST['v_naam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $a_naam = $_POST['a_naam'];
    $adres = $_POST['adres'];
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    
    $query = 'SELECT email FROM lid';
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result))
    {
        if($row['email'] = $email)
        {
            $emailgebruikt = TRUE;
        }
    }
    if ($emailgebruikt = FALSE)
    {
    $sql = "INSERT INTO lid (v_naam, tussenvoegsel, a_naam, adres, huisnummer, postcode, woonplaats, email, telefoon) VALUES ('$vnaam', ' $tussenvoegsel', '$a_naam', '$adres', '$huisnummer', '$postcode', '$woonplaats', '$email', '$telefoonnummer');";
    $result = mysqli_query($conn, $sql);
    header("Location: ../Leden_aanmaken.php?Lid_Toegevoegd=Succes");
    }
    else if ($emailgebruikt = TRUE)
    {
        header("Location: ../Leden_aanmaken.php?Lid_Niet_Toegevoegd=Email_Reeds_Gebruikt");
    }
    else
    {
        header("Location: ../Leden_aanmaken.php?UnkownError=Please_Try_Again");
    }
    ?>

