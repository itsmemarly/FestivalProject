<?php
include_once('connection.php');
$FestivalID = $_GET['id'];
$sth = $conn->prepare("DELETE FROM festival where FestivalID = $FestivalID");
$sth->execute();

header('Location:./festivalbekijken.php');
?>