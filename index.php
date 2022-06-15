<?php
include_once('connection.php');
?>


<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- JS-->
    <script src="./JS/index.js"></script>

    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <!-- jQuery -->
    <script src="/path/to/cdn/jquery.slim.min.js"></script>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
    <script src="/path/to/cdn/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/path/to/font-awesome/all.min.css" />
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

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
    include_once("navbar.php");
    ?>

    <div class="container">
        <!-- about header-->
        <section>
            <div class="row justify-content-md-center">
                <div class="card" style="background-color: rgb(211, 211, 211, 0.6)" id="FestivalInfo">
                    <h4 style="font-size: 36px; color: brown;">
                        <?php $q = $conn->prepare("SELECT FestivalNaam FROM festival WHERE FestivalNaam = 'Survento'");
                        $q->execute();
                        $FestivalNaam = $q->fetchColumn();
                        echo $FestivalNaam
                        ?>
                    </h4>
                    <div class="card-body">
                        <h4 class="card-title d-flex">Over het festival</h4>
                        <p class="card-text d-flex">
                            <?php
                            $q = $conn->prepare("SELECT FestivalInfo FROM festival WHERE FestivalNaam = 'Survento'");
                            $q->execute();
                            $FestivalInfo = $q->fetchColumn();
                            echo $FestivalInfo ?>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Timetable -->
        <section>
            <div class="row">

                <div class="card" style="background-color:rgba(211, 211, 211, 0.6) ;">
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
                            
                            $sth = $conn->prepare("SELECT * FROM tijdvak, band, speelt_muziekstuk, muziekstuk WHERE tijdvak.BandID = band.BandID AND band.BandID = speelt_muziekstuk.BandID ORDER BY Begintijd ASC");
                            $sth->execute();
                            /* Fetch all of the remaining rows in the result set */
                            $result = $sth->fetchAll();
                            ?>
                            <?php
                                foreach ($result as $row)
                                $BandNaam = $row['BandNaam'];
                                $BeginTijd = $row['Begintijd'];
                                $EindTijd = $row['Eindtijd'];
                                $GescoordePunten = $row['GescoordePunten'];
                                $NaamMuziekstuk = $row['MuziekstukID'];
                                $Dirigent = $row['Dirigent'];
                                $Divisie = $row['Divisie'];
                                ?>
                            <tr> 
                                <th scope="row"> <?php echo $BeginTijd ?> - <?php echo $EindTijd ?> </th>
                                <td>
                                    <b><?php echo $BandNaam ?></b>
                                    <br> <?php echo $Dirigent ?>
                                    <br> stuk 1 <br> stuk 2
                                    
                                </td>
                                <td> <?php echo $Divisie?></td>
                                <td> <?php echo $GescoordePunten ?></td>
                            </tr>
                        </tbody>
                    </table>




                </div>
        </section>

        <!-- row juryleden -->
        <section>

            <div class="row d-flex justify-content-between">

                <div class="col-md-3 col-sm-12 mt-4">
                    <div class="card">
                        <img src="./images/jurylid1.jpg" style="height: 350px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jury lid</h5>
                            <p class="card-text">Ik ben een jurylid. Hier staat veel interessante informatie over mij
                            </p>
                        </div>
                    </div>
                </div>z

                <div class="col-md-3 col-sm-12 mt-4">
                    <div class="card">
                        <img src="./images/jurylid2.jpg" style="height: 350px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jury lid</h5>
                            <p class="card-text">Ik ben een jurylid. Hier staat veel interessante informatie over mij.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 mt-4">
                    <div class="card">
                        <img src="./images/jurylid3.jpg" style="height: 350px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jury lid</h5>
                            <p class="card-text">Ik ben een jurylid. Hier staat veel interessante informatie over mij.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!--carousel sponsoren -->
        <section>

            <div class="row col2" style="padding: 0cm;">

                <div class="containersponsor" id="featureContainer">
                    <div class="row  justify-content-center">
                        <div id="feature" a href="https://www.jqueryscript.net/tags.php?/Carousel/" Carousel class="carousel slide" data-bs-ride="carousel">

                            <!-- Carousel Items -->
                            <div class="carousel-inner" role="listbox" style="height: 150px;">
                                <div class="carousel-item active">
                                    <div class="row col2 justify-content-md-between">

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('./images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('./images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('./images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('./images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('./images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('./images/image150.jpg');">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="row col2">

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('./images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row col2">

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                        <div class="col  justify-content-center">
                                            <div class="card border-0 SponsorItem" style="background-image:  url('images/image150.jpg');">
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</body>


</html>