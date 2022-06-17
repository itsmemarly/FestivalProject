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

    $BandNaam = $row['BandNaam'];
    $Divisie = $row['Divisie'];
    $GescoordePunten = $row['GescoordePunten'];


  
        echo "<tr>";
            echo "<td>" . $BandNaam . "</td>";
            echo "<td>". $Divisie . "</td>";
            echo "<td" . $GescoordePunten . "</td>";
            echo "</tr>";
}
?>

        </tbody>
    </table>
    </div>

    </body>
    <?php
    
?>
</html>