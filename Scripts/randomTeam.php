<?php
include_once 'Includes/Login.inc.php';

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

?>