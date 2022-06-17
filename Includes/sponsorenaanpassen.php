<?php
include_once ('connection.php');
include_once('links.php');
$SponsorID = $_GET['id'];
$sth = $conn->prepare("SELECT * FROM sponsor");
$sth->execute();
$data = $sth->fetchAll();
foreach($data as $row){
$SponsorNaam = $row['Sponsornaam'];
$SponsorLogo = $row['SponsorLogo'];
$SponsorInfo = $row['SponsorInfo'];
$SponsorWebsite = $row['SponsorWebsite'];

}       
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Sponsoren aanpassen</title>
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
                <form method="post" action="./editSponsoren.php?id=<?=$SponsorID?>">
                
                    <div class=" mt-4 ms-2 mb-3 row">
                        <h1>Sponsor aanpassen</h1>
                    </div>
                    <div class="mt-4 ms-2 mb-3 row">
                        <label for="FestivalNaam" class="col-sm-12 col-form-label">Naam van sponsor:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="Sponsornaam" value="<?php echo $SponsorNaam?>">
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="FestivalLogo" class="col-sm-12 col-form-label">Voeg logo toe:</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-md" type="text" name="SponsorLogo" value="<?php echo $SponsorLogo?>"></input>
                        </div>
                       
                    <div class="mt-4 ms-2 mb-3 row">
                        <label for="FestivalInfo" class="col-sm-12 col-form-label">Voeg een beschrijving toe:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control form-control-md"  name="SponsorInfo"  rows="3" ><?php echo $SponsorInfo?></textarea>
                        </div>
                    </div>
                    <div class="mt-4 ms-2 mb-3 row">
                        <label for="FestivalInfo" class="col-sm-12 col-form-label">Website van sponsor:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control form-control-md"  name="SponsorWebsite"  rows="3" ><?php echo $SponsorWebsite?></textarea>
                        </div>
                    </div>
                  
                    <div class="ms-2 mb-3 row">
                        <button type="submit" name="submit" class="ms-2 col-sm-4 btn btn-success">Opslaan</button>
                    </div>
                </form>
            </div>


</body>
</html>