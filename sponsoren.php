<?php
include_once("connection.php");
?>
<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="./CSS/sponsoren.css" type="text/css">
<head>
    <!-- jQuery -->
    <script src="/path/to/cdn/jquery.slim.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="./JS/index.js"></script>
    
    <meta charset="UTF-8">
    <title>Sponsoren</title>
    
</head>
<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <img src="https://lirp.cdn-website.com/a8be4524/dms3rep/multi/opt/logo+surventofestival-98w.png" alt="survento logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <a class="nav-link" style="color: aliceblue; font-size: 30px;" href="index.html">Home</a>
        <a class="nav-link" style="color: aliceblue; font-size: 30px;" href="inschrijven.html">Inschrijven</a>
        <a class="nav-link" style="color: aliceblue; font-weight: bolder; font-size: 30px;" href="index.html">Sponsoren</a>
        <a class="nav-link" style="color: aliceblue; font-size: 30px;" href="login.html">Inloggen</a>
    </div>
</div>

<?php

$sth = $conn->prepare("SELECT * FROM sponsor");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
print_r($result);
foreach ($result as $row) {
    // if(ISSET($_POST['display'])){
    //     $sql = "SELECT * FROM 'sponsor' WHERE SponsorID = 1";
    //     $query = $conn->prepare($sql);
    //     $query->execute();
    //     while($fetch = $query->fetch()){ 

?>

<div class="row mt-4">
    
    <div class="card col-3" style="width: 18rem;">
    <img class="card-img-top mt-4" src="<tr><td><?php echo $row['SponsorLogo']?></td></tr>" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><tr><td><?php echo $row['Sponsornaam']?></td></tr></h5>
        <p class="card-text"><tr><td><?php echo $row['SponsorInfo']?></td></tr></p>
        <a href='<tr><td><?php echo $row['SponsorWebsite']?></td></tr>' class="btn btn-block btn-secondary">Naar website</a>
    </div>
</div>

<?php
           }
        // }
?>

<div class="row mt-4">
    
    <div class="card col-3" style="width: 18rem;">
    <img class="card-img-top mt-4" src="images/pexels.png" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Sponsor</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-block btn-secondary">Naar website</a>
    </div>
</div>

        <div class="card col-3" style="width: 18rem;">
        <img class="card-img-top mt-4" src="images/pexels1.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Sponsor</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-block btn-secondary">Naar website</a>
        </div>
    </div>

            <div class="card  col-4" style="width: 18rem;">
        <img class="card-img-top mt-4" src="images/pexels3.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Sponsor</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-block btn-secondary">Naar website</a>
        </div>
    </div>
</div>

<div class="row mt-4">

    <div class="card col-3" style="width: 18rem;">
        <img class="card-img-top mt-4" src="images/pexels.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Sponsor</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn-block btn btn-secondary">Naar website</a>
        </div>
    </div>

        <div class="card col-3" style="width: 18rem;">
        <img class="card-img-top mt-4" src="images/pexels1.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Sponsor</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-block btn-secondary">Naar website</a>
        </div>
    </div>

            <div class="card col-3" style="width: 18rem;">
        <img class="card-img-top mt-4" src="images/pexels3.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Sponsor</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-block btn-secondary">Naar website</a>
        </div>
    </div>
    
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>