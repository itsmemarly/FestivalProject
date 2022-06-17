<?php {

$GebruikerMail= $_POST['GebruikerMail'];
$GebruikerWW= $_POST['GebruikerWW'];

include_once("./connection.php");
include_once("./links.php");

$pdo = database::connect();

try{

    $query = "INSERT INTO gebruiker (GebruikerMail, GebruikerWW) VALUES ($GebruikerMail, $GebruikerWW)";

    $stmt = $pdo->prepare($query);

    $stmt->execute($sql);

    header('Location: GebruikersBekijken.php');
    echo "Success";
}
catch(PDOException $exception){
    die('Error: ' . $exception->getMessage());
}
catch(Exception $exception){
    die('General Error: ' .$exception->getMessage());
}

$conn = null;


    }
?>

