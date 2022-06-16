<?php
include_once("./Includes/connection.php");

include_once("./Includes/links.php");

session_start();
if(!empty($_SESSION['loginEmail'])) {
header("location:./Includes/dashboard.php");
}



if(isset($_POST['checkLogin'])) {

$user = $_POST['loginEmail'];
$pass = $_POST['loginPass'];

if(empty($user) || empty($pass)) {
$message = 'Alle velden zijn verplicht';
} else {
$query = $conn->prepare("SELECT GebruikerMail, GebruikerWW FROM gebruiker WHERE 
GebruikerMail=? AND GebruikerWW=? ");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
  $_SESSION['loginEmail'] = $user;
  header('location:./Includes/dashboard.php');
} else {
  $message = "Email/Wachtwoord is incorrect";
  header("location:./login.php");
}


}

}
?>