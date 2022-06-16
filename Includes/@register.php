<?php

$GebruikerMail= $_POST['gebruikermail'];
$GebruikerWW= $_POST['gebruikerww'];

include_once("./connection.php");

$pdo = Database::connect();

try{

    $query = "INSERT INTO gebruiker (GebruikerMail, GebruikerWW) VALUES (:gebruikermail, :gebruikerww)";

    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":gebruikermail",$GebruikerMail);
    $stmt->bindparam(":gebruikerww", $GebruikerWW);
    $stmt->execute($sql);

    header('Location: GebruikersBekijken.php');
    echo "Success";
}
catch(PDOException $exception){
    die('Error: ' . $exception->getMessage());
}
catch(Exception $exception){
    die('General Error: '.$exception->getMessage())
}

$conn = null;
?>

