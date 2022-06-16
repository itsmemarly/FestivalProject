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

<div class="container2 col-md-6">
    <!-- Uitslagen -->
    <table class="Uitslag table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Bandnaam</th>
            <th scope="col">Divisie</th>
            <th scope="col">Beoordeeld op</th>
            <th scope="col">Totaal</th>
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
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>2e divisie</td>
            <td>Programmaopbouw</td>
            <td>30 punten</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>3e divisie</td>
            <td>Presentatie en entertainment</td>
            <td>50 punten</td>
        </tr>
        </tbody>
    </table>
    </div>

    </body>
</html>