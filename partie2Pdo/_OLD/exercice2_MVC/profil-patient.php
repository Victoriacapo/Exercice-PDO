<?php
require 'controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>profil-patient</title>
    </head>
    <body>

       <?php
        foreach ($show as $patient) {
            ?>
            <div class="container">
                <h2>Liste patients</h2>
                <div class="card" style="width:300px">
                    <p>Patient: </p>
                    <div class="card-body">
                        <h4 class="card-title">Nom: <?= $patient->lastname ?></h4>
                        <h4 class="card-title">Prénom: <?= $patient->firstname ?> </h4>
                        <a href="#liste-patient.php" class="btn btn-primary">+ d'infos</a>
                    </div>
                </div>
            </div>
            <?php 
        }
                ?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    </body>
</html>
