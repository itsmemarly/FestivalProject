<?php
include_once ('./connection.php');
if(isset($_POST["submit"]))
{
$SponsorNaam = $_POST['Sponsornaam'];
$SponsorLogo = $_POST['SponsorLogo'];
$SponsorInfo = $_POST['SponsorInfo'];
$SponsorWebsite = $_POST['SponsorWebsite'];

            $sql = 'INSERT INTO sponsor (Sponsornaam, SponsorLogo, SponsorInfo, SponsorWebsite) 
            VALUES (:Sponsornaam, :SponsorLogo, :SponsorInfo, :SponsorWebsite)';

            $statement = $conn->prepare($sql);
            $statement->execute([
                ':Sponsornaam' => $SponsorNaam,
                ':SponsorLogo' => $SponsorLogo,
                ':SponsorInfo' => $SponsorInfo,
                ':SponsorWebsite' => $SponsorWebsite,
            ]);

            header("Location:./SponsorenToevoegen.php");
        }

?>