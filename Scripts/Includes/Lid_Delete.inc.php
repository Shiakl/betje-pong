
<?php  
    include_once 'Login.inc.php';
    $idtx = $_POST['submit'];
    $lidDelQuery = "DELETE FROM `betjepong`.`lid` WHERE `id`='$idtx'";
    $result = mysqli_query($conn, $lidDelQuery);
    header("Location: ../Leden_Overzicht.php?Lid_Verwijderd=Succes");