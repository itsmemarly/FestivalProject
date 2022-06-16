<?php
include_once("./connection.php");
include_once("./links.php");
?>
<!DOCTYPE html>
<html lang="en">
<header>
    <title>Gebruikers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</header>
</section>

<body>

    <!-- Navbar-->
    <?php
    include_once("./exclNavbar.php")
    ?>

<?php
$sth = $conn->prepare("SELECT * FROM gebruiker");
$sth->execute();

/* Fetch all of the remaining rows in the result set */

$result = $sth->fetchAll();

?>
<?php
foreach ($result as $row) {
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
                            <th><td><tr><td><?php echo $row['GebruikerMail']?></td></tr></td></th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td></td>
                            <td><button class="btn btn-primary">Edit gebruiker</button></td>
                            <form action="deletegebruiker.php" method="post">
                            <td><button class="btn btn-danger" type="button">Delete</button></td>
                            </form>
                        </tr>
                    </tbody>
                </table>

            </div>
        </section>
    </body>

<?php
    }
?>

</html>