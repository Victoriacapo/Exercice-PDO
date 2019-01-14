<?php
require 'controller5.php';
?>
<!DOCTYPE html>
<html>
   <head>
        <meta charset="UTF-8">
        <title>Exercice5 PDO - Partie 1 : Lire des données</title>
    </head>
    <body>
        <p>Consigne: Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :</p>
        <ul>
            <li>Nom : Nom du client</li>
            <li>Prénom : Prénom du client</li>
            <li>Trier les noms par ordre alphabétique </li>
        </ul>

        <?php
        foreach ($prenomEnM as $nomdefamille) {
            ?>
            <div><?= $nomdefamille->id?>/ &nbsp;<?= $nomdefamille->lastName?>-<?= $nomdefamille->firstName?></div>
            <?php
        }
        ?>
    </body>
</html>