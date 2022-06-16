<?php
include_once("./Includes/connection.php");

include_once("./Includes/links.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <title>Inschrijven</title>
</head>

<body>
    <section>
        <header>
            <title>Inloggen & Registreren</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
            <link rel="stylesheet" href="./CSS/navbar.css">
    <?php
include_once("./Includes/navbar.php");
    ?>
        </header>
    </section>
    <?php
    include_once('navbar.php')
    ?>

    <body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">
    <div class="container">
        <!-- row inschrijven festivals -->
        <div class="row" id="inschrijven">
            <div class="row mt-4">
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="./images/Festival.jpg" style="height: 350px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Festival</h5>
                <p class="card-text">Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival.</p>
                <a type="submit" target="_blank" class="btn btn-primary">Schrijf je in voor Festivalnaam</a>
              </div>
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="./images/Festival.jpg" style="height: 350px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Festival</h5>
                <p class="card-text">Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival.</p>
                <button type="button" class="btn btn-primary">Schrijf je in voor Festivalnaam</button>
              </div>
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="./images/Festival.jpg" style="height: 350px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Festivalnaam</h5>
                <p class="card-text">Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival.</p>
                <button type="button" class="btn btn-primary">Schrijf je in voor Festivalnaam</button>
              </div>
            </div>
          </div>
        </div>
      <div class="row mt-4" id="inschrijven"></div>
        <div class="row" id="inschrijven">
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img src="./images/Festival.jpg" style="height: 350px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Festivalnaam</h5>
                  <p class="card-text">Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival.</p>
                  <button type="button" class="btn btn-primary">Schrijf je in voor Festivalnaam</button>
                </div>
              </div>
            </div>
      
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img src="./images/Festival.jpg" style="height: 350px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Festivalnaam</h5>
                  <p class="card-text">Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival.</p>
                  <button type="button" class="btn btn-primary">Schrijf je in voor Festivalnaam</button>
                </div>
              </div>
            </div>
      
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img src="./images/Festival.jpg" style="height: 350px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Festivalnaam</h5>
                  <p class="card-text">Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival. <br> Hier staat informatie over dit festival.</p>
                  <button type="button" class="btn btn-primary">Schrijf je in voor Festivalnaam</button>
                </div>
              </div>
            </div>
            </div>
          </div>
    </div>
</body>
</html>