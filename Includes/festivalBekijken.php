<?php
include_once("./connection.php");
include_once("./links.php");
// Initialize the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<header>
    <title>Festivaloverzicht</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</header>
</section>

<body>

    <!-- Navbar-->
    <?php
    include_once("./exclNavbar.php")
    ?>

    <body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">
        <section>
            <div class="container mt-3">
                <h2>Festivaloverzicht</h2>
                <p>Overzicht van alle festivals:</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Festivalnaam</th>
                            <th>Datum</th>
                            <th>Tijd</th>
                            <th>Bewerken</th>
                            <th>Verwijderen</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                $sth = $conn->prepare("SELECT * FROM festival ORDER BY FestivalDatum ASC");
                $sth->execute();
                /* Fetch all of the remaining rows in the result set */
                $result = $sth->fetchAll();
                ?>
                    <?php
                  foreach ($result as $row) {
                    $festivalID = $row['FestivalID'];
                    $FestivalNaam = $row['FestivalNaam'];
                    $FestivalDatum = $row['FestivalDatum'];
                    $FestivalBegintijd = $row['FestivalBegintijd'];
                    $FestivalEindtijd = $row['FestivalEindtijd'];
                 ?>
                  
                        <tr>
                            <td><?php echo $FestivalNaam?></td> 
                            <td><?php echo date ('d-m-y', strtotime($FestivalDatum))?></td>
                            <td><?php echo date('H:i', strtotime($FestivalBegintijd)) ?> - <?php echo date('H:i', strtotime($FestivalEindtijd))?></td>
                            <td><button class="btn btn-primary">Edit festival</button></td>
                            <form action="deletefestival.php" method="post">
                            <td><button class="btn btn-danger" value="$festivalID" name="delete">Delete festival</button></td>
                            </form>
                        </tr>
                        
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>

</html>