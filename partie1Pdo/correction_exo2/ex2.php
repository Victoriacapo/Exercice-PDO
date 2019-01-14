<?php
require 'controller2.php';
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
        <title>Exercice 2  PDO - Partie 1 : Lire des données</title>
    </head>
    <body>
        <p>Consigne: Afficher tous les types de spectacles possibles.</p>
   
        <?php
        foreach ($showList as $show) {
            ?>
            <div><?= $show->type?></div>
            <?php
        }
        ?>
    </body>
</html>
