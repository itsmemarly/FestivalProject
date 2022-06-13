<?php
include_once("connection.php");
?>
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
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <a class="nav-link" style="color: aliceblue; font-size: 30px;" href="index.html">Home</a>
                <a class="nav-link" style="color: aliceblue; font-weight: bolder; font-size: 30px;" href="inschrijven.html">Inschrijven</a>
                <a class="nav-link" style="color: aliceblue; font-size: 30px;" href="sponsoren.html">Sponsoren</a>
                <a class="nav-link" style="color: aliceblue; font-size: 30px;" href="login.html">Inloggen</a>
            </div>
        </div>
        </nav>

</section>
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
</html>