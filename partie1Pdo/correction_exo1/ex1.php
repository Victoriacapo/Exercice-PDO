<?php
require 'controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 1   PDO - Partie 1 : Lire des données</title>
    </head>
    <body>
        <p>Consigne: Afficher tous les clients. Ayant auparavant executer le script sql contenant les données de la base de donnée. </p>

        <?php
        foreach ($clientsList as $clients) {
            ?>
            <div><?= $clients->lastName ?>-<?= $clients->firstName ?></div>
        <?php
        } 
        ?>


    </body>
</html>
