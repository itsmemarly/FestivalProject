<?php
include_once("./connection.php");
include_once("./links.php");
?>
<<<<<<< HEAD
=======

>>>>>>> 4c78f3897fc90ffa10a99fc12cdefb155e31e547
<!DOCTYPE html>
<html lang="en">
<header>
    <title>Gebruikers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</header>
</section>

<body>

<<<<<<< HEAD
<!-- Navbar -->
<section>

      <?php
include_once("./exclNavbar.php");
      ?>

</section>
<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">
<section>
    <div class="container mt-3">
        <h2>Gebruikers</h2>
        <p>Informatie over de gebruikers van de website:</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Mail</th>
                <th>Wachtwoord</th>
                <th>Rol</th>
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
    $gebruikerID = $row['GebruikerID'];
    $gebruikersrol = $row['Rol'];
    $gebruikersmail = $row['GebruikerMail'];
    $gebruikerwachtwoord = $row['GebruikerWW'];
    ?>
    <tr>
                <td><?php echo $gebruikerID ?></td>
                <td><?php echo $gebruikersmail ?></td>
                <td><?php echo $gebruikerwachtwoord ?></td>
                <td><?php echo $gebruikersrol ?></td>
            </tr>
    <?php
                        }
    ?>
        
          
            </tbody>
        </table>
    </div>
</section>
</body>
=======
    <!-- Navbar-->
    <?php
    include_once("./exclNavbar.php")
    ?>

    <body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">
        <section>
            <div class="container mt-3">
                <h2>Gebruikers</h2>
                <p>Informatie over de gebruikers van de website:</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td><button class="btn btn-primary">Edit gebruiker</button></td>
                            <td><button class="btn btn-danger">Delete gebruiker</button></td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                            <td><button class="btn btn-primary">Edit gebruiker</button></td>
                            <td><button class="btn btn-danger">Delete gebruiker</button></td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td><button class="btn btn-primary">Edit gebruiker</button></td>
                            <td><button class="btn btn-danger">Delete gebruiker</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </body>

>>>>>>> 4c78f3897fc90ffa10a99fc12cdefb155e31e547
</html>