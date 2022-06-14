<?php
$servername = "localhost";
$username = "root";
//Wachtwoord van Patrick, aanpassen voor eigen connectie
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=FestivalProject", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>