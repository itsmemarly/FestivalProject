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
   ?>

<!-- Content -->

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6" style="background-color: black">
                    <h1 class="text-white">Informatie</h1>

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
                        <form class="card-body tab-content" action="submitRegister.php" method="post">
                            <div class="tab-pane active" id="login">
                                <div class="mb-3 row">
                                    <label for="loginEmail" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="loginEmail" id="loginEmail">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="loginPass" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="loginPass" id="loginPass">
                                    </div>
                                </div>
                              
                                </div>

                                <div class="mb-3 row">
                                    <label for="userPass2" class="col-sm-4 col-form-label" >Herhaal wachtwoord</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="userPass2" id="userPass2">
                                    </div>
                                </div>
                                <button class="btn btn-primary" name="submit" type="submit">Registreer</button>
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