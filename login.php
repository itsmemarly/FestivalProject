<?php
include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en-en">

<!-- Links -->
    <header>
        <title>Inloggen & Registreren</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

       

    </header>


<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">

<!-- Navbar-->
<?php
  include_once("navbar.php")
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
                            <h5 class="card-title">Login / registreren</h5>
                            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#registreren">Registreren</a>
                                </li>
                            </ul>
                        </div>
                        <form class="card-body tab-content">
                            <div class="tab-pane active" id="login">
                                <div class="mb-3 row">
                                    <label for="loginEmail" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="loginEmail">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="loginPass" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="loginPass">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                            <div class="tab-pane" id="registreren">
                                <div class="mb-3 row">
                                    <label for="userName" class="col-sm-4 col-form-label">Naam</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="userName">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="userEmail" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="userEmail">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="userPass" class="col-sm-4 col-form-label">Wachtwoord</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="userPass">
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