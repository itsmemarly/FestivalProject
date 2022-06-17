<?php
include_once ('connection.php');

if(isset($_POST["submit"]))
{
$SponsorID = $_GET['id'];

$SponsorNaam = $_POST['Sponsornaam'];
$SponsorLogo = $_POST['SponsorLogo'];
$SponsorInfo = $_POST['SponsorInfo'];
$SponsorWebsite = $_POST['SponsorWebsite'];


$sql = "UPDATE sponsor SET Sponsornaam = '$SponsorNaam', SponsorLogo = '$SponsorLogo', SponsorInfo = '$SponsorInfo', SponsorWebsite = '$SponsorWebsite'
 WHERE sponsor.SponsorID = $SponsorID";

            $statement = $conn->prepare($sql);
            $statement->execute();

            header('Location:SponsorenBekijken.php');
        }
?>