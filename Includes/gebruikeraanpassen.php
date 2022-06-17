<?php
include_once ('connection.php');
include_once('links.php');
$GebruikerID = $_GET['id'];
$sth = $conn->prepare("SELECT * FROM gebruiker where GebruikerID = $GebruikerID");
$sth->execute();
$data = $sth->fetchAll();
foreach($data as $row){
$GebruikerMail = $row['GebruikerMail'];
$GebruikerWW = $row['GebruikerWW'];

}       
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
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
                <form method="post" action="./editgebruiker.php?id=<?=$GebruikerID?>">
                
                    <div class=" mt-4 ms-2 mb-3 row">
                        <h1>Gebruiker aanpassen</h1>
                    </div>
                    <div class="mt-4 ms-2 mb-3 row">
                        <label for="FestivalNaam" class="col-sm-12 col-form-label">Mail:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="GebruikerMail" value="<?php echo $GebruikerMail?>">
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="FestivalLogo" class="col-sm-12 col-form-label">Wachtwoord</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="GebruikerWW" value="<?php echo $GebruikerWW?>"></input>
                        </div>
                       
                    <div class="ms-2 mb-3 row">
                        <button type="submit" name="submit" class="ms-2 col-sm-4 btn btn-success">Opslaan</button>
                    </div>
                </form>
            </div>


</body>
</html>