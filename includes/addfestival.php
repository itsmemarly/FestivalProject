<?php
include_once ('./connection.php');

    if(isset($_POST["submit"])){
            $FestivalNaam = $_POST['FestivalNaam'];
            $FestivalLogo = $_POST['FestivalLogo'];
            $FestivalInfo = $_POST['FestivalInfo'];
            $FestivalDatum = $_POST['FestivalDatum'];
            $FestivalBegintijd = $_POST['FestivalBegintijd'];
            $FestivalEindtijd = $_POST['FestivalEindtijd'];
            $sql = 'INSERT INTO festival (FestivalNaam, FestivalLogo, FestivalInfo, FestivalDatum, FestivalBegintijd, FestivalEindtijd) VALUES (:FestivalNaam, :FestivalLogo, :FestivalInfo, :FestivalDatum, :FestivalBegintijd, :FestivalEindtijd)';

            $statement = $conn->prepare($sql);
            $statement->execute([
                ':FestivalNaam' => $FestivalNaam,
                ':FestivalLogo' => $FestivalLogo,
                ':FestivalInfo' => $FestivalInfo,
                ':FestivalDatum' => $FestivalDatum,
                ':FestivalBegintijd' => $FestivalBegintijd,
                ':FestivalEindtijd' => $FestivalEindtijd
            ]);

            header("Location:./festivaltoevoegen.php");
        }
?>