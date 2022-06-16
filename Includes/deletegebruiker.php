<?php

include_once ('./connection.php');
//include_once("./Includes/links.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])):	
				   
	$GebruikerMail = array_search("delete",$_POST['delete']);	 
	
	$sql = "DELETE FROM gebruikers WHERE GebruikerMail = :GebruikerMail";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':GebruikerMail', $GebruikerMail);
	$stmt->execute();
	header('Location: ./GebruikersBekijken.php');
	exit;
endif;

?>
 

