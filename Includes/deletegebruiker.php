<?php
include_once ('./connection.php');
	
	$GebruikerID = $_GET['id'];
	$sth = $conn->prepare("DELETE FROM gebruiker where GebruikerID = $GebruikerID");
	$sth->execute();

	header('Location: ./GebruikersBekijken.php');

?>
 

