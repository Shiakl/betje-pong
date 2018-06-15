<?php
include_once 'Includes/Login.inc.php';

$date = $_POST['date'];
$waardeaant = $_POST['numOfPlayers'];
$waardetype = $_POST['typeMatch'];




if(isset($_POST['player'])){
    $spelers = $_POST['player'] ;
    if(count($spelers)<$waardeaant || (count($spelers)%2) == 1){
        header("Location: Toernooi.php?speleraantal=onjuist");
    }else{
        if($waardetype == 2){
            shuffle($spelers); 
            $teamnum = count($spelers) /2;

            for($i = 0;$i<$teamnum;$i++){
                $z = $i + $teamnum;
                $sql = "INSERT INTO team (id, lid1, lid2) VALUES ('$i','$spelers[$i]','$spelers[$z]');";
                $result = mysqli_query($conn, $sql);
            }
            echo "<br>Toevoegen gelukt<br>";
            echo $teamnum."<br>";
            
        }
    }
}
echo $date."<br>";
echo $waardeaant."<br>";
echo $waardetype."<br>";
?>