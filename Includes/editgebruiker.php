<?php
include_once ('connection.php');

if(isset($_POST["submit"]))
{
$GebruikerID = $_GET['id'];

$GebruikerMail = $_POST['GebruikerMail'];
$GebruikerWW = $_POST['GebruikerWW'];


$sql = "UPDATE gebruiker SET GebruikerMail = '$GebruikerMail', GebruikerWW = '$GebruikerWW'WHERE gebruiker.GebruikerID = $GebruikerID";

            $statement = $conn->prepare($sql);
            $statement->execute();

            header('Location:GebruikersBekijken.php');
        }
?>