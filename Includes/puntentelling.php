<?php
include_once("./connection.php");

include_once("./links.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <title>Puntentelling</title>
</head>
<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">
<?php
include_once("./exclNavbar.php");
?>

    <!-- Form -->
    <div class="container-fluid mt-4">
        <div class="">

        <!-- muzikaliteit -->
        <div class="muzikaliteit card .col-sm-12 col-md-3 mt-4" style="width: 30rem;">
            <div class="card-body">
                <h6 class="card-title">Beoordeling muzikaliteit</h6>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Voer hier de bandnaam in...">
                </div>

                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecteer divisie...</option>
                    <option value="3">Concert divisie</option>
                    <option value="1">1e divisie</option>
                    <option value="2">2e divisie</option>
                    <option value="3">3e divisie</option>
                    <option value="3">4e divisie</option>
                    <option value="3">5e divisie</option>
                </select>

                <select class="form-select mt-3" aria-label="Default select example">
                    <option selected>Selecteer aantal punten...</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                <button type="submit" class="btn btn-secondary mt-3">Verstuur</button>
            </div>
        </div>
        
        
        <!-- programmaopbouw -->
        <div class="card col-md-3 mt-4 " style="width: 30rem;">
            <div class="card-body">
                <h6 class="card-title">Beoordeling programmaopbouw</h6>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Voer hier de bandnaam in...">
                </div>

                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecteer divisie...</option>
                    <option value="3">Concert divisie</option>
                    <option value="1">1e divisie</option>
                    <option value="2">2e divisie</option>
                    <option value="3">3e divisie</option>
                    <option value="3">4e divisie</option>
                    <option value="3">5e divisie</option>
                </select>

                <select class="form-select mt-3" aria-label="Default select example">
                    <option selected>Selecteer aantal punten...</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                <button type="submit" class="btn btn-secondary mt-3">Verstuur</button>
            </div>
        </div>

        <!-- presentatie en entertainment -->
        <div class="presentatie card col-md-3 mt-4" style="width: 30rem;">
            <div class="card-body">
                <h6 class="card-title">Beoordeling presentatie en entertainment</h6>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Voer hier de bandnaam in...">
                </div>

                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecteer divisie...</option>
                    <option value="3">Concert divisie</option>
                    <option value="1">1e divisie</option>
                    <option value="2">2e divisie</option>
                    <option value="3">3e divisie</option>
                    <option value="3">4e divisie</option>
                    <option value="3">5e divisie</option>
                </select>

                <select class="form-select mt-3" aria-label="Default select example">
                    <option selected>Selecteer aantal punten...</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                <button type="submit" class="btn btn-secondary mt-3">Verstuur</button>
            </div>
        </div>
        </div>
        
        
    </div> <!-- container -->

</body>
</html>