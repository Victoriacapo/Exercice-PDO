<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail');
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
            </thead>
        <?php
        $reponse = $bdd->query('SELECT id, lastName, firstName  FROM clients WHERE id<=20');
        while ($donnees = $reponse->fetch()) {
            ?>


            <tbody>
            <td><?= $donnees['id']; ?></td>
            <td><?= $donnees['lastName']; ?></td>
            <td><?= $donnees['firstName']; ?></td>
            </tbody>

        <?php
    }


    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>
</table>
</body>
</html>
