<?php
include_once("./connection.php");

include_once("./links.php");
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
                <form method="post" action="./addfestival.php">
                    <div class=" mt-4 ms-2 mb-3 row">
                        <h1>Festival toevoegen</h1>
                    </div>
                    <div class="mt-4 ms-2 mb-3 row">
                        <label for="FestivalNaam" class="col-sm-12 col-form-label">Naam van het festival:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="FestivalNaam" id="FestivalNaam">
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="FestivalLogo" class="col-sm-12 col-form-label">Voeg logo toe:</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-md" type="file" name="FestivalLogo" id="FestivalLogo">
                        </div>
                       
                    <div class="mt-4 ms-2 mb-3 row">
                        <label for="FestivalInfo" class="col-sm-12 col-form-label">Voeg een beschrijving toe:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control form-control-md" name="FestivalInfo" id="FestivalInfo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="FestivalDatum" class="col-sm-2 col-form-label">Datum:</label>
                        <div class="col-sm-10">
                            <input type="date" id="FestivalDatum" name="FestivalDatum">
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="BeginTijd" class="col-sm-2 col-form-label">Start tijd:</label>
                        <div class="col-sm-10">
                           
                                <input type="time" id="BeginTijd" name="BeginTijd">
                            
                        </div>
                    </div>
                    <div class=" ms-2 mb-3 row">
                        <label for="EindTijd" class="col-sm-2 col-form-label">Eind tijd:</label>
                        <div class="col-sm-10">
                       
                                <input type="time" id="EindTijd" name="EindTijd">
                          
                        </div>
                    </div>
                    </div>
                    <div class="ms-2 mb-3 row">
                        <button type="submit" name="opslaan" class="ms-2 col-sm-4 btn btn-success">Opslaan</button>
                    </div>
                </form>
            </div>


</body>
</html>