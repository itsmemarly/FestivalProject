<?php
include_once("./links.php");

include_once("./exclNavbar.php");
?>
<link rel="stylesheet" href="./../CSS/dashboard.css">

<div class="container py-5">
  <div class="row">
    <div class="col-lg-12 p-5">
      <h1> <i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</h1>
      <hr />
    </div>
  </div>

  <!-- Festivals toevoegen & bekijken -->
  <div class="card">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 p-2">
      <a class="text-decoration-none" href="./festivalBekijken.php">
        <div class="card p-3 shadow bg-card text-center border-0 ">
          <div class="card-body">
            <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">Festivals Bekijken</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 p-2">
      <a class="text-decoration-none" href="./festivaltoevoegen.php">
        <div class="card p-3 shadow bg-card text-center border-0">
          <div class="card-body">
            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">Festival Toevoegen</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Gebruikers toevoegen & bekijken -->
 
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 p-2">
      <a class="text-decoration-none" href="./GebruikersBekijken.php">
        <div class="card p-3 shadow bg-card text-center border-0 ">
          <div class="card-body">
            <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">Gebruikers Bekijken</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 p-2">
      <a class="text-decoration-none" href="./register.php">
        <div class="card p-3 shadow bg-card text-center border-0">
          <div class="card-body">
            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">Gebruikers Toevoegen</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Scores toevoegen & bekijken -->

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 p-2">
      <a class="text-decoration-none" href="./puntentelling.php">
        <div class="card p-3 shadow bg-card text-center border-0 ">
          <div class="card-body">
            <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">Scores Bekijken</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 p-2">
      <a class="text-decoration-none" href="./puntentelling.php">
        <div class="card p-3 shadow bg-card text-center border-0">
          <div class="card-body">
            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">Scores Toevoegen</p>
          </div>
        </div>
      </a>
    </div>

    

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 p-2">
      <a class="text-decoration-none" href="#" data-toggle="modal" data-target="#modelHELP">
        <div class="card p-3 shadow bg-card text-center border-0">
          <div class="card-body">
            <i class="fa fa-question fa-2x" aria-hidden="true"></i>
            <hr />
            <p class="card-title lead">Contact Opnemen</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</div>

<footer class="footer fixed-bottom">
  <div class="row text-center p-3">
    <p class="small text-muted"></p>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modelHELP" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-question-circle-o" aria-hidden="true"></i>
         Contact opnemen </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">
        <p>
          <small>Heeft u nog vragen? <br/>Stuur een mail of bel naar dit telefoonnummer.</small>
        </p>
        <hr />
        <p> <i class="fa fa-envelope mr-3" aria-hidden="true"></i> email@qq.com </p>
        <p><i class="fa fa-volume-control-phone mr-3" aria-hidden="true"></i> +32-7494692 </p>

      </div>

    </div>
  </div>
</div>
