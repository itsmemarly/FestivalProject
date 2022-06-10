<?php
$servername = "FestivalProject";
$username = "root";
//Wachtwoord van Patrick, aanpassen voor eigen connectie
$password = "3xD4hJ54vI1!";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>