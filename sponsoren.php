<?php
include_once("./Includes/connection.php");

include_once("./Includes/links.php");
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

 <?php
include_once("./Includes/navbar.php");
 ?>
<div class="row mt-4">
<?php
$sth = $conn->prepare("SELECT * FROM sponsor");
$sth->execute();

/* Fetch all of the remaining rows in the result set */

$result = $sth->fetchAll();

?>
<?php
foreach ($result as $row) {
?>


    <div class="card col-md-3 col-sm-12" style="width: 18rem;">
    <img class="card-img-top mt-4" src="<?php echo $row['SponsorLogo']?>" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><tr><td><?php echo $row['Sponsornaam']?></td></tr></h5>
        <p class="card-text"><tr><td><?php echo $row['SponsorInfo']?></td></tr></p>
        <a href="<?php echo $row['SponsorWebsite']?>" class="btn btn-block btn-secondary">Naar website</a>
    </div>
</div>

<?php
           }
?>
    
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>