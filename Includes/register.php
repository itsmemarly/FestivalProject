<?php
include_once("./connection.php");
include_once("./links.php");
?>
<!DOCTYPE html>
<html lang="en-en">

<!-- Links -->
    <header>
        <title>Registreren</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  

    </header>


<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">

<!-- Navbar -->

   <?php
   include_once("./exclNavbar.php");
   include_once("./links.php");
   ?>

<!-- Content -->

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6" style="background-color: black">
                    <h1 class="text-white">Informatie</h1>
                    <p class="text-white"><br>Dit is een registratieportaal voor administratoren en coördinatoren.<br>
                        <br>In dit portaal kunnen accounts aangemaakt worden voor nieuwe administratoren of coördinatoren.<br>
                        <br>Vul hier een emailadres in en maak een wachtwoord aan.
                        <br><br><br><br><br>Let op! Dit is niet bedoeld voor het registreren van nieuwe gebruikers (bands), maar alleen voor geverifieerde administratoren en coördinatoren.
                    </p>

                </div>

                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Registreren</h5>
                            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                             
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#registreren">Registreren</a>
                                </li>
                            </ul>
                        </div>
                        <form class="card-body tab-content" method="post" action= "atregister.php">
                            <div class="tab-pane active" id="login">
                                <div class="mb-3 row">
                                    <label for="loginEmail" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="loginEmail" name="GebruikerMail" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="loginPass" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="loginPass" name="GebruikerWW" required>
                                    </div>
                                </div>
                              
                                </div>

                                <div class="mb-3 row">
                                    <label for="userPass2" class="col-sm-4 col-form-label">Herhaal wachtwoord</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="userPass2">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Registreer</button>
                            </div>

                        </form>
                    </div>

                </div>

            <!-- Plek voor een footer-->

              <footer>
                  
              </footer>
            </div>
         
        </div>
     

</body>

</html>