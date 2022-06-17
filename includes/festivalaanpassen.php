<?php
include_once ('connection.php');
$FestivalID = $_GET['id'];
$sth = $conn->prepare("SELECT * FROM festival where FestivalID = $FestivalID");
$sth->execute();
$data = $sth->fetchAll();
foreach($data as $row){
$FestivalNaam = $row['FestivalNaam'];
$FestivalLogo = $row['FestivalLogo'];
$FestivalInfo = $row['FestivalInfo'];
$FestivalDatum = $row['FestivalDatum'];
$FestivalBegintijd = $row['FestivalBegintijd'];
$FestivalEindtijd = $row['FestivalEindtijd'];
}       
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
    <script src="/path/to/cdn/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="/path/to/cdn/jquery.slim.min.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    
    <meta charset="UTF-8">
    <title>Title</title>
</head>



<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">
<!-- Navbar -->
<?php
include_once("./exclNavbar.php");
?>

<!-- x -->
<section>
    <div class="container col-sm-12 col-md-12">
        <div class="row">
            <div class="mt-4 ms-5 card  ">
                <form method="post" action="./editfestival.php?id=<?=$FestivalID?>">
                
                    <div class=" mt-4 ms-2 mb-3 row">
                        <h1>Festival aanpassen</h1>
                    </div>
                    <div class="mt-4 ms-2 mb-3 row">
                        <label for="FestivalNaam" class="col-sm-12 col-form-label">Naam van het festival:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="FestivalNaam" value="<?php echo $FestivalNaam?>">
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="FestivalLogo" class="col-sm-12 col-form-label">Voeg logo toe:</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-md" type="file" name="FestivalLogo" value="<?php echo $FestivalLogo?>">
                        </div>
                       
                    <div class="mt-4 ms-2 mb-3 row">
                        <label for="FestivalInfo" class="col-sm-12 col-form-label">Voeg een beschrijving toe:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control form-control-md"  name="FestivalInfo"  rows="3" value="<?php echo $FestivalInfo?>"></textarea>
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="FestivalDatum" class="col-sm-2 col-form-label">Datum:</label>
                        <div class="col-sm-10">
                            <input type="date" name="FestivalDatum" value="<?php echo $FestivalDatum?>">
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="BeginTijd" class="col-sm-2 col-form-label">Start tijd:</label>
                        <div class="col-sm-10">
                                <input type="time" name="FestivalBegintijd" value="<?php echo $FestivalBegintijd?>">
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="EindTijd" class="col-sm-2 col-form-label">Eind tijd:</label>
                        <div class="col-sm-10">
                                <input type="time" name="FestivalEindtijd" value="<?php echo $FestivalEindtijd?>">
                        </div>
                    </div>
                    </div>
                    <div class="ms-2 mb-3 row">
                        <button type="submit" name="submit" class="ms-2 col-sm-4 btn btn-success">Opslaan</button>
                    </div>
                </form>
            </div>


</body>
</html>