<!DOCTYPE html>
<?php
require '../controller/controller_liste-patients.php';
?>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Liste des patients</title>
        <link rel="stylesheet" href="../asset/css/style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row d-flex justify-content-center no-gutters">
                <div class="col-12 text-center form"><h1>Liste des patients</h1></div>
                <div class="col-12 text-center form">
                    <a href="http://pdo-partie1/partie2/view/ajout-patient.php"><button type="button" class="btn btn-outline-success">Ajouter un patient</button></a>
                    <a href="http://pdo-partie1/partie2/index.php"><button type="button" class="btn btn-outline-success">Accueil</button></a>
                </div>
            </div>

            <div class="row">
                <?php
                foreach ($allPatientsList as $patients) {
                    ?>
                    <div class="col-3 form">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">

                                <div class="name-list"><?= $patients->lastname; ?> <?= $patients->firstname; ?></div>
                                <a href="http://pdo-partie1/partie2/view/profil-patient.php?id=<?= $patients->id; ?>"><button type="button" class="btn btn-success">profil patient</button></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </body>
</html>