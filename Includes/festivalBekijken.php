<?php
include_once("./connection.php");
include_once("./links.php");
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
                    $FestivalNaam = $row['FestivalNaam'];
                    $FestivalDatum = $row['FestivalDatum'];
                    $FestivalBegintijd = $row['FestivalBegintijd'];
                    $FestivalEindtijd = $row['FestivalEindtijd'];
                    $FestivalID = $row['FestivalID'];
                
                  
                        echo "<tr>";
                            echo "<td>" . $FestivalNaam . "</td>";
                            echo "<td>". date ('d-m-y', strtotime($FestivalDatum)) . "</td>";
                            echo "<td>"  . date('H:i', strtotime($FestivalBegintijd)) . '-' . date('H:i', strtotime($FestivalEindtijd)) .
                             "</td>";
                            echo "<td>" .  "<a class='btn btn-primary' href='./festivalaanpassen.php?id=".$row['FestivalID']."'>Edit festival</a>"; "</td>";
                            echo "<td>" .  "<a class='btn btn-danger' href='./deletefestival.php?id=".$row['FestivalID']."'>Delete festival</a>"; "</td>";
                            echo "</tr>";
                        
                         } ?>
                
                    </tbody>
                </table>
                <a href="./festivaltoevoegen.php" class="btn btn-primary">Festival toevoegen</a>
            </div>
        </section>
    </body>

</html>