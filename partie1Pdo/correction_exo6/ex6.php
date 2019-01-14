<?php
require 'controller6.php';
?>
<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <title>Exercice6 PDO - Partie 1 : Lire des données</title>
    </head>
    
        <p>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. 
            Trier les titres par ordre alphabétique. 
            Afficher les résultat comme ceci : Spectacle par artiste, la date et l'heure.</p>

        <?php
        foreach ($showName as $showinfos) {
            ?>
            <div><?= $showinfos->id ?>- Nom spectacle: <?= $showinfos->title ?> | Artiste: <?= $showinfos->performer ?> | Date: <?= $showinfos->date ?> | Débute à: <?= $showinfos->startTime ?></div>
            <?php
        }
        ?>


    
