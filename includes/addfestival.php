<?php
include_once ('./links.php');
include_once ('./connection.php');

    if(ISSET($_POST['submit'])){
        try{
            $FestivalNaam = $_POST['FestivalNaam'];
            $FestivalLogo = $_POST['FestivalLogo'];
            $FestivalInfo = $_POST['FestivalInfo'];
            $FestivalDatum = $_POST['FestivalDatum'];
            $FestivalBegintijd = $_POST['FestivalBegintijd'];
            $FestivalEindtijd = $_POST['FestivalEindtijd'];
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if($FestivalNaam){
                echo "Yes 1";
            }
            $sql = "INSERT INTO festival (`FestivalNaam`, `FestivalLogo`, `FestivalInfo`, `FestivalDatum`, 'FestivalBegintijd', 'FestivalEindtijd') VALUES (`$FestivalNaam`, `$FestivalLogo`, `$FestivalInfo`, `$FestivalDatum`, '$FestivalBegintijd', '$FestivalEindtijd')";
            $conn->execute($sql);


        }catch(PDOException $e){
            echo $e->getMessage();
        }
  
        echo "<script>alert('Successfully inserted data!')</script>";
        echo "<script>window.location='index.php'</script>";
    }
?>