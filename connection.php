<?php
$servername = "localhost:8080";
$username = "root";
$password = "Wachtwoord123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=festivaldatabase", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>