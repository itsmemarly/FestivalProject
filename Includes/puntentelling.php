<?php
include_once("./connection.php");

include_once("./links.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="./../CSS/puntentelling.css">
    
    <meta charset="UTF-8">
    <title>Puntentelling</title>
</head>
<body>
<?php
include_once("./exclNavbar.php");
?>

    <!-- Form -->
    <div class="container-fluid mt-4">
        <div class="column">

        <!-- muzikaliteit -->
        <div class="muzikaliteit card .col-12 col-3 mt-4" style="width: 30rem;">
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
        <div class="card col-3 mt-4 " style="width: 30rem;">
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
        <div class="presentatie card col-3 mt-4" style="width: 30rem;">
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

    <div class="container2">
    <!-- Uitslagen -->
    <table class="Uitslag table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Bandnaam</th>
            <th scope="col">Divisie</th>
            <th scope="col">Beoordeeld op</th>
            <th scope="col">Totaal</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>1e divisie</td>
            <td>Muzikaliteit</td>
            <td>50 punten</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>2e divisie</td>
            <td>Programmaopbouw</td>
            <td>30 punten</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>3e divisie</td>
            <td>Presentatie en entertainment</td>
            <td>50 punten</td>
        </tr>
        </tbody>
    </table>
    </div>
   

    










</body>
</html>