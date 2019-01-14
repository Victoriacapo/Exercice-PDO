<?php
require 'controller3.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice3 PDO - Partie 1 : Lire des données</title>
    </head>
    <body>
        <p>Consigne: Afficher les 20 premiers clients.</p>
        <?php
        foreach ($userList as $user) {
            ?>
            <div><?= $user->id?>/ &nbsp;<?= $user->lastName ?>-<?= $user->firstName ?></div>
            <?php
        }
        ?>
    </body>
</html>
