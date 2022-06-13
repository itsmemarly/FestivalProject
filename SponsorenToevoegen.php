<!DOCTYPE html>
<html>
<header>
    <title>Sponsor Toevoegen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</header>
</section>

<body style="background-image: linear-gradient(#2BC0E4, #EAECC6); background-repeat: no-repeat;  background-attachment: fixed;">

    <!-- Navbar-->
    <?php
    include_once("navbar.php")
    ?>

    <!-- Card sponsor toevoegen -->
    <section>
        <div class="container">
            <div class="row">
                <div class="mt-4 ms-5 card col-md-6 col-sm-12">
                    <form>
                        <div class=" mt-4 ms-2 mb-3 row">
                            <h1>Sponsor toevoegen</h1>
                        </div>
                        <div class="mt-4 ms-2 mb-3 row">
                            <label for="sponsorNaam" class="col-sm-12 col-form-label">Naam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sponsorNaam">
                            </div>
                        </div>
                        <div class=" ms-2 mb-3 row">
                            <label for="sponsorBeschrijving" class="col-sm-12 col-form-label">Beschrijving</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sponsorBeschrijving">
                            </div>
                        </div>
                        <div class=" ms-2 mb-3 row">
                            <label for="sponsorLink" class="col-sm-12 col-form-label">Link naar website</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sponsorLink">
                            </div>
                        </div>
                        <div class=" ms-2 mb-3 row">
                            <label for="formFileMultiple" class="col-sm-12 col-form-label">Voeg afbeelding toe:</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-md" type="file" id="formFileMultiple">
                            </div>

                        </div>
                        <div class="ms-2 mb-3 row">
                            <button type="submit" class="ms-2 col-sm-4 btn btn-success">Opslaan</button>
                        </div>
                    </form>
                </div>

                <!-- Card voor lijst sponsoren -->
                <div class="mt-4 ms-5 card col-md-5 col-sm-12">

                </div>
            </div>
        </div>
    </section>
</body>

</html>