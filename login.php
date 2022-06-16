<?php
include_once("./Includes/connection.php");

include_once("./Includes/links.php");

?>
<!DOCTYPE html>
<html lang="en-en">

<!-- Links -->
    <header>
        <title>Inloggen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </header>


<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">

<!-- Navbar -->

   <?php
   include_once("./Includes/navbar.php");
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
                            <h5 class="card-title">Login</h5>
                            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#login">Login</a>
                                </li>
                          
                            </ul>
                        </div>
                        <form class="card-body tab-content" method="post" action="checkLogin.php">
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
                                <button class="btn btn-primary" name="checkLogin" type="submit">Login</button>
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