<?php
include_once("./Includes/connection.php");

include_once("./Includes/links.php");
?>
<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="./CSS/sponsoren.css" type="text/css">
<head>

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


</body>
</html>