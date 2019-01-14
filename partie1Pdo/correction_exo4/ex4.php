<?php
require 'controller4.php';
?>
<!DOCTYPE html>
<html>
   <head>
        <meta charset="UTF-8">
        <title>Exercice4 PDO - Partie 1 : Lire des données</title>
    </head>
    <body>
        <p>Consigne: N'afficher que les clients possédant une carte de fidélité.</p>
        <?php
        foreach ($clientaveccarte as $carteok) {
            ?>
            <div><?= $carteok->id?>/ &nbsp;<?= $carteok->lastName ?>-<?= $carteok->firstName ?> | &nbsp;nombre carte:<?= $carteok->card ?> | &nbsp;n°carte: <?= $carteok->cardNumber?></div>
            <?php
        }
        ?>
    </body>
</html>
