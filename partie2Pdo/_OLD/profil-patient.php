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
        <title>Exercice 2   PDO - Partie 2 : Écrire des données      
            Consigne: Créer une page liste-patients.php et y
            afficher la liste des patients. 
            Inclure dans la page, un lien vers la création de patients. </title>
    </head>
    <body>

        <?php
        foreach ($show as $patient) {
            ?>
            <ul>
                <li>id: <?= $patient->id ?> </li>
                <li>Nom: <?= $patient->lastname ?> </li>
                <li>Prénom: <?= $patient->firstname ?> </li>
                <li> Date de naissance: <?= $patient->birthdate ?></li>
                <li>Téléphone: <?= $patient->phone ?></li>
                <li>Mail: <?= $patient->mail ?></li>
            </ul>
            <?php
        }
        ?>
        <!--redirection vers la page index.php de l'exo1, pr l'ajout de patient dans la base de données-->
        <input type="button" onclick="(window.location = '../index.php')" value="Création patient" /> 



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
    </body>
</html>
