<?php
require 'controller7.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 7   PDO - Partie 1 : Lire des données</title>
  </head>
    <body>
        <p>Consigne: Afficher tous les clients comme ceci : </p>
        <ul>
            <li>Nom : Nom de famille du client</li>
            <li> Prénom : Prénom du client</li>
            <li>Date de naissance : Date de naissance du client</li>
            <li>Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</li>
            <li>Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</li>
        </ul>
        
        <?php
        foreach ($clientsList as $clients) {
            ?>
        <ul>
            <li>Nom: <?= $clients->lastName ?> </li>
            <li>Prénom: <?= $clients->firstName ?> </li>
            <li> Date de naissance: <?= $clients->birthDate ?></li>
            <li>Carte de fidelité: <?= $clients->card ?></li>
            <li>N°carte: <?= $clients->cardNumber ?></li>
        </ul>
        <?php
        } 
        ?>


    </body>
</html>
