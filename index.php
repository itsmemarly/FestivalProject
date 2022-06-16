<?php
include_once("./Includes/connection.php");

include_once("./Includes/links.php");
?>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- JS-->
    <script src="./JS/index.js"></script>

    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/navbar.css">


</head>

<body>

    <!-- Background image-->
    <section>
        <video autoplay muted loop id="myVideo">
            <source src="images/brass2.mp4" type="video/mp4">
        </video>
    </section>

    <!-- Navbar-->
    <?php
    include_once("./Includes/navbar.php");
    ?>

        <div class="container">
            <!-- about header-->
            <section>
                <div class="row justify-content-md-center">
                    <div class="card" style="background-color: rgb(211, 211, 211, 0.8)" id="FestivalInfo">
                        <?php
                        $sth = $conn->prepare("SELECT * FROM festival WHERE festival.FestivalNaam = 'survento'");
                        $sth->execute();
                        /* Fetch all of the remaining rows in the result set */
                        $result = $sth->fetchAll(); 
                    ?>
                        <?php foreach($result as $row) { 
                    $FestivalID = $row['FestivalID'];    
                    ?>

                        <h4 style="font-size: 36px; color: brown;"><?php echo $row['FestivalNaam']; ?></h4>
                        <div class="card-body">
                            <h4 class="card-title d-flex">Over het festival</h4>
                            <p class="card-text d-flex"><?php echo $row['FestivalInfo']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <!-- Timetable -->
            <section>
                <div class="row">

                    <div class="card" style="background-color:rgba(211, 211, 211, 0.8) ;">
                        <div class="row col-sm-12 ">
                            <h1 class="d-flex justify-content-center" style="color: brown ;">Festival Programma</h1>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Tijd</th>
                                    <th scope="col">Orkest & Stukken</th>
                                    <th scope="col">Divisie</th>
                                    <th scope="col">Punten</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                          $sth = $conn->prepare("SELECT * FROM tijdvak, band WHERE tijdvak.BandID = band.BandID ORDER BY Begintijd ASC");
                          $sth->execute();
                          /* Fetch all of the remaining rows in the result set */
                          $result = $sth->fetchAll(); ?>
                                <?php
                          foreach ($result as $row) {
                          $begintijd = $row['Begintijd'];
                          $eindtijd = $row['Eindtijd'];
                          $gescoordepunten = $row['GescoordePunten'];
                          $bandID = $row['BandID'];
                          $bandnaam = $row['BandNaam'];
                          $banddivisie = $row['Divisie'];
                          $Dirigent = $row['Dirigent']
                          ?>
                                <tr>
                                    <td><b><?php echo date('H:i', strtotime($begintijd)) ?> -
                                            <?php echo date('H:i', strtotime($eindtijd)) ?></b></td>
                                    <td><b><?php echo $bandnaam ?></b>
                                        <br><?php echo $Dirigent ?>
                                        <div class='collapse' id='collapsemuziek'>
                                            <?php  
                                    $sth = $conn->prepare("SELECT MuziekstukID FROM speelt_muziekstuk WHERE speelt_muziekstuk.BandID = $bandID");
                                    $sth->execute();
                                    /* Fetch all of the remaining rows in the result set */
                                    $result = $sth->fetchAll(); ?>
                                            <?php
                                    foreach($result as $row){
                                      $MuziekstukID = $row['MuziekstukID'];
                                    ?>
                                            <?php
                                        $sth = $conn->prepare("SELECT NaamMuziekstuk FROM muziekstuk WHERE muziekstuk.MuziekstukID = $MuziekstukID");
                                        $sth->execute();
                                        /* Fetch all of the remaining rows in the result set */
                                        $result = $sth->fetchAll(); 
                                        ?>
                                            <?php
                                        foreach($result as $row){
                                          $MuziekstukNaam = $row['NaamMuziekstuk'];
                                          ?>
                                            <br> <?php echo $MuziekstukNaam ?>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td><?php echo $banddivisie ?></td>
                                    <td>
                                        <?php
                                  //Check of score al ingevuld is
                                  if (is_null($gescoordepunten)) {
                                  echo "Score is onbekend";
                                  } 
                                  else {
                                  echo $gescoordepunten;
                                  }?>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <p>
                            <a class='btn btn-secondary' role='button' type='button' data-bs-toggle="collapse"
                                data-bs-target="#collapsemuziek" aria-controls="collapsemuziek" aria-expanded="false">
                                toggle muziekstukken</a>
                        </p>

                    </div>
            </section>

            <!-- row juryleden -->
            <section>

                <div class="row d-flex justify-content-center">
                    <?php
                $sth = $conn->prepare("SELECT JuryID FROM jureert WHERE jureert.FestivalID = $FestivalID");
                $sth->execute();
                /* Fetch all of the remaining rows in the result set */
                $result = $sth->fetchAll();
                ?>
                    <?php
                  foreach ($result as $row) {
                    $JuryID = $row['JuryID'];
                  
                 ?>
                    <?php
                $sth = $conn->prepare("SELECT * FROM jury WHERE jury.JuryID = $JuryID");
                $sth->execute();
                /* Fetch all of the remaining rows in the result set */
                $result = $sth->fetchAll();
                ?>
                    <?php
                  foreach ($result as $row) { ?>
                    <div class="col-md-3 col-sm-12 mt-4">
                        <div class="card" style="height:max-content">
                            <img src="<?php echo $row['JuryLogo'] ?>" style="max-height: 300px;" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['JuryNaam'] ?></h5>
                                <p class="card-text"><?php echo $row['JuryInfo'] ?></p>
                                <?php
                                  //Check of er een website is ingevuld
                                  if (is_null($row['JuryWebsite'])) {
                                  } 
                                  else { ?>
                                <p>
                                    <a href="<?php echo $row['JuryWebsite']?>" target='_blank'><button type='button'
                                            class="btn-secondary">Website</button></a>
                                </p>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>

                </div>
            </section>

            <!--carousel sponsoren -->
            <section>
                <div class="row d-flex justify-content-center">
                    <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item active">
                                <img src="./images/image150.jpg" alt="...">
                            </div>
                            <?php
                        $sth = $conn->prepare("SELECT SponsorLogo FROM sponsor");
                        $sth->execute();
                        /* Fetch all of the remaining rows in the result set */
                        $result = $sth->fetchAll();
                        ?>
                            <?php
                        foreach ($result as $row) { ?>

                            <div class="carousel-item">
                                <img src="<?php echo $row['SponsorLogo']?>" class="d-block"
                                    style="width: 150px; height: 150px">
                            </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>
            </section>
        </div>





</body>


</html>