<<<<<<< HEAD
=======
<?php
include_once("connection.php");
?>
>>>>>>> 1ebd398cd6e931a4ce4c31ba51bf845df0aa85c0
<!DOCTYPE html>
<html lang="en">
<header>
    <title>Gebruikers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</header>
</section>

<body>

<<<<<<< HEAD
    <!-- Navbar-->
    <?php
    include_once("navbar.php")
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </body>

=======
<!-- Navbar -->
<section>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <img src="https://lirp.cdn-website.com/a8be4524/dms3rep/multi/opt/logo+surventofestival-98w.png" alt="survento logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
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
>>>>>>> 1ebd398cd6e931a4ce4c31ba51bf845df0aa85c0
</html>