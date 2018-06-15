<?php
include_once 'Includes/Login.inc.php';

$spelers= $_POST['teams'];
$teams = $_POST['teamId'];

$teamnum = count($spelers) /2;

$k = 0;
for($i = 0;$i<$teamnum;$i++){
    $z = $k + +1;
    $sql = "INSERT INTO team (lid1, lid2) VALUES ('$spelers[$k]','$spelers[$z]');";
    $result = mysqli_query($conn, $sql);
    $k= $k+2;
}

echo "Toevoegen gelukt";

?>