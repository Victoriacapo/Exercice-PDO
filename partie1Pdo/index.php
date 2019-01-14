<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 1   PDO - Partie 1 : Lire des données</title>
    </head>
    <body>
        <p>Consigne: Afficher tous les clients. Ayant auparavant executer le script sql contenant les données de la base de donnée. </p>
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail'); //instancie un nouvel objet; permet la connexion a ma base de donnée.
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
        $reponse = $bdd->query('SELECT lastName, firstName  FROM clients');
        while ($donnees = $reponse->fetch()) { //on pt utiliser fetchAll() aussi
            ?>
            <tbody>
            <td><?= $donnees['lastName'] ?></td>
            <td><?= $donnees['firstName'] ?></td>
        </tbody>

        <?php
    }


    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>
</table>

</body>
</html>
