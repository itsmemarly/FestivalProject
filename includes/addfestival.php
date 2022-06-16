<?php

require_once 'connection.php';
 
    if(ISSET($_POST['submit'])){
        try{
            $FestivalNaam = $_POST['firstname'];
            $FestivalLogo = $_POST['lastname'];
            $FestivalInfo = $_POST['username'];
            $FestivalDatum = $_POST['password'];
            $FestivalEindtijd = $_POST['']
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `user` (`firstname`, `lastname`, `username`, `password`) VALUES ('$firstname', '$lastname', '$username', '$password')";
            $conn->exec($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
 
        $conn = null;
 
        echo "<script>alert('Successfully inserted data!')</script>";
        echo "<script>window.location='index.php'</script>";
    }
?>