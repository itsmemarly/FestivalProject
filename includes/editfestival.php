<?php
include_once ('connection.php');

if(isset($_POST["submit"]))
{
$FestivalID = $_GET['id'];

$FestivalNaam = $_POST['FestivalNaam'];
$FestivalLogo = $_POST['FestivalLogo'];
$FestivalInfo = $_POST['FestivalInfo'];
$FestivalDatum = $_POST['FestivalDatum'];
$FestivalBegintijd = $_POST['FestivalBegintijd'];
$FestivalEindtijd = $_POST['FestivalEindtijd'];

$sql = "UPDATE festival SET Festivalnaam = '$FestivalNaam', FestivalLogo = '$FestivalLogo', 
FestivalInfo = '$FestivalInfo', FestivalDatum = '$FestivalDatum', FestivalBegintijd = '$FestivalBegintijd', 
FestivalEindtijd = '$FestivalEindtijd' WHERE festival.FestivalID = $FestivalID";

            $statement = $conn->prepare($sql);
            $statement->execute();

            header('Location:./festivalaanpassen.php?id='.$FestivalID);
        }
?>