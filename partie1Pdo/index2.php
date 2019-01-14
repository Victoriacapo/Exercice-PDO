<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail');
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
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>
        <table>
            <thead>
            <th>Type de spectacle</th> 
            </thead>
        <?php
        $reponse = $bdd->query(' SELECT `type` FROM `showTypes`');
        while ($donnees = $reponse->fetch()) {
            ?>


            <tbody>
            <td><?= $donnees['type']; ?></td>
            </tbody>

        <?php
    }


    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>
       </table>
</body>
</html>
