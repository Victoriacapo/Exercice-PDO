<?php
include_once('../controller/controllerliste-patient.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/style.css">
        <title>profil-patient</title>
    </head>
    <body>
        <div>
            <button id="retour" onclick="(window.location = '../index.php')">Retour</button> <!--redirection php vers une autre page--> 
        </div>
        <h1>Liste patients</h1>
        <div class="container">
            <div class="row">
                <?php
                foreach ($show as $patient) {
                    ?>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <h1>Patient: </h1>
                            <div class="card-body">
                                <h4 class="card-title">Nom: <?= $patient->lastname ?></h4>
                                <h4 class="card-title">Prénom: <?= $patient->firstname ?> </h4>
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="liste-patient.php?id=<?= $patient->id; ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        + d'infos
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <p>texte</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
    </body>
</html>
