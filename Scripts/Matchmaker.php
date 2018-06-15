<?php
include_once 'Includes/Login.inc.php';

$date = $_POST['date'];
$waardeaant = $_POST['numOfPlayers'];
$waardetype = $_POST['typeMatch'];

if(isset($_POST['player'])){
    $spelers = $_POST['player'] ;
    if(count($spelers)<>$waardeaant){
        header("Location: Toernooi.php?speleraantal=onjuist");
    }
}

$ids = join(',', array_map('intval', $spelers));
$sql = "SELECT id,v_naam,tussenvoegsel,a_naam FROM lid WHERE id IN ($ids)";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <h3>Teams indelen</h3>

<body> 
<?php
    $numofteams = $waardeaant/2;
    $teams[] = 'A';
    $teams[] = 'B';
    $teams[] = 'C';
    $teams[] = 'D';
    $teams[] = 'E';
    for($x = 0; $x<$waardeaant;$x++){
    $query[$x] = mysqli_query($conn, $sql);
    }
    $indexer = 0;
    for($x = 0; $x<$numofteams;$x++){
        echo "
        <form action = 'customteams.php' method = POST>
            <h4>Selecteer de leden van team ".$teams[$x]." :</h4>
            <input type='hidden' id='teamId' name='teamId[]' value='".$x."'>
            <select id = '".$teams[$x].$x."'name = 'teams[]'>
                <option value = 'none'>Selecteer speler</option>";
            while($row = mysqli_fetch_array($query[$indexer])){   //Creates a loop to loop through results             
                echo "<option value=".$row['id'].">".$row['v_naam']." ".$row['tussenvoegsel']." ".$row['a_naam']."</option>"; 
            } ;
            $indexer ++;
            echo "</select><br>
            <select id = '".$teams[$x].$x."' name = 'teams[]'>
            <option value ='none'>Selecteer speler</option>";
            while($row = mysqli_fetch_array($query[$indexer])){   //Creates a loop to loop through results             
                echo "<option value=".$row['id'].">".$row['v_naam']." ".$row['tussenvoegsel']." ".$row['a_naam']."</option>"; 
            } ;
            $indexer++;
            echo "</select><br>";
        }
        ?>
        <input type="submit" value = "Maak match">
</form> 


</body>
</html>

<script>
</script>

 <!-- <a href='randomTeam.php'><button formaction='randomTeam.php' type='submit' name ='players[]' value='player'> Create</button></a> -->
