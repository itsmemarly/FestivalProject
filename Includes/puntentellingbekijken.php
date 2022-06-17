<?php
include_once("./connection.php");
include_once("./links.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <title>Puntentelling bekijken</title>
</head>
<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">
<?php
include_once("./exclNavbar.php");
?>

<h2>Score overzicht</h2>
                <p>Overzicht van alle scores:</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Band Naam</th>
                            <th>Divisie</th>
                            <th>Beoordeeld op</th>
                            <th>Gescoorde punten</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
$sth = $conn->prepare("SELECT * FROM tijdvak");
$sth->execute();
$sth = $conn->prepare("SELECT * FROM band");
$sth->execute();

/* Fetch all of the remaining rows in the result set */

$result = $sth->fetchAll();

?>
<?php
foreach ($result as $row) {
?>
<div class="container2 col-md-6">
    <!-- Uitslagen -->
    <table class="Uitslag table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th><td><tr><td><?php echo $row['BandNaam']?></td></tr></td></th>
            <th><td><tr><td><?php echo $row['Divisie']?></td></tr></td></th>
            <th scope="col">Beoordeeld op</th>
            <th><td><tr><td><?php echo $row['GescoordePunten']?></td></tr></td></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>1e divisie</td>
            <td>Muzikaliteit</td>
            <td>50 punten</td>
        </tr>
        </tbody>
    </table>
    </div>

    </body>
    <?php
    }
?>
</html>