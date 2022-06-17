<?php
include_once("./connection.php");
include_once("./links.php");
?>

<!DOCTYPE html>
<html lang="en">
<header>
    <title>Sponsoren</title>
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
                <h2>Sponsoren</h2>
                <p>Overzicht van alle sponsoren:</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sponsornaam</th>
                            <th>Sponsor Info</th>
                            <th>Sponsor Website</th>
                            <th>Bewerken</th>
                            <th>Verwijderen</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                $sth = $conn->prepare("SELECT * FROM sponsor");
                $sth->execute();
                /* Fetch all of the remaining rows in the result set */
                $result = $sth->fetchAll();
                ?>
                    <?php
                  foreach ($result as $row) {
                    $SponsorID = $row['SponsorID'];
                    $SponsorNaam = $row['Sponsornaam'];
                    $SponsorInfo = $row['SponsorInfo'];
                    $SponsorWebsite = $row['SponsorWebsite'];
              
                
                  
                        echo "<tr>";
                            echo "<td>" . $SponsorID . "</td>";
                            echo "<td>".$SponsorNaam . "</td>";
                            echo "<td>".$SponsorInfo . "</td>";
                            echo "<td>".$SponsorWebsite . "</td>";
                            echo "<td>" .  "<a class='btn btn-primary' href='./sponsorenaanpassen.php?id=".$row['SponsorID']."'>Edit sponsor</a>"; "</td>";
                            echo "<td>" .  "<a class='btn btn-danger' href='./festivalaanpassen.php?id=".$row['SponsorID']."'>Delete sponsor</a>"; "</td>";
                            echo "</tr>";
                        
                         } ?>

                    </tbody>
                </table>
            </div>
        </section>
    </body>

</html>