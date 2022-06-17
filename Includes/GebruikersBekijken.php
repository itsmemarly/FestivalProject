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
                            <th>ID</th>
                            <th>Mail</th>
                            <th>Bewerken</th>
                            <th>Verwijderen</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                $sth = $conn->prepare("SELECT * FROM gebruiker");
                $sth->execute();
                /* Fetch all of the remaining rows in the result set */
                $result = $sth->fetchAll();
                ?>
                    <?php
                  foreach ($result as $row) {
                    $GebruikerID = $row['GebruikerID'];
                    $GebruikerMail = $row['GebruikerMail'];
              
                
                  
                        echo "<tr>";
                            echo "<td>" . $GebruikerID . "</td>";
                            echo "<td>".$GebruikerMail . "</td>";
                            echo "<td>" .  "<a class='btn btn-primary' href='./gebruikeraanpassen.php?id=".$row['GebruikerID']."'>Edit gebruiker</a>"; "</td>";
                            echo "<td>" .  "<a class='btn btn-danger' href='./festivalaanpassen.php?id=".$row['GebruikerID']."'>Delete gebruiker</a>"; "</td>";
                            echo "</tr>";
                        
                         } ?>

                    </tbody>
                </table>
            </div>
        </section>
    </body>

</html>