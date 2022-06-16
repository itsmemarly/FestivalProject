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

            <link rel="stylesheet" href="./CSS/navbar.css">
        </header>
    </section>
    
    <body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">
       
   <!-- Navbar-->
  <?php
  include_once("./Includes/navbar.php")
  ?>
  
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