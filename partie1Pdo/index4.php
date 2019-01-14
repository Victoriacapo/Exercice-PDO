<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail');
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
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>
        <table>
            <thead>
            <th>id</th> 
            <th>Nom</th> 
            <th>Prénom</th> 
            <th>card</th> 
            <th>cardNumber</th> 
        </thead>
        <?php
        $reponse = $bdd->query('SELECT id, lastName, firstName, card, cardNumber FROM clients WHERE card=1');
        while ($donnees = $reponse->fetch()) {
            ?>
            <tbody>
            <td><?= $donnees['id']; ?></td>
            <td><?= $donnees['lastName']; ?></td>
            <td><?= $donnees['firstName']; ?></td>
            <td><?= $donnees['card']; ?></td>
            <td><?= $donnees['cardNumber']; ?></td>
        </tbody>

        <?php
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>
</table>
</body>
</html>
