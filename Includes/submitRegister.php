<?php

include_once ('./connection.php');
if(isset($_POST["submit"]))
{
$username = $_POST['loginEmail'];
$pw = $_POST['loginPass'];
$roles = "Coördinator";
$sql = 'INSERT INTO gebruiker(GebruikerMail, GebruikerWW, Rol)VALUES(:username,:pw, :roles)';

$statement = $conn->prepare($sql);
$statement->execute([
	':username' => $username,
    ':pw' => $pw,
    ':roles' => $roles
]);

$publisher_id = $conn->lastInsertId();

echo 'The publisher id ' . $publisher_id . ' was inserted';
}
?>