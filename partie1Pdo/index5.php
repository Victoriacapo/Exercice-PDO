<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail'); //connection a la base de donnée avec le serveur le dbname(nom de la base), login et mot de passe du php myadmin.
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
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>
        <table>
            <thead>
            <th>Nom</th> 
            <th>Prénom</th> 
        </thead>
        <?php
        $reponse = $bdd->query('SELECT lastName, firstName FROM clients WHERE lastName like "M%" ORDER BY lastName');
        while ($donnees = $reponse->fetch()) {
            ?>

            <tbody>
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
