<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice7 PDO - Partie 1 : Lire des données</title>
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
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'victoriac', '1Travail');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nom</th> 
                    <th>Prénom</th> 
                    <th>date de naissance</th>
                    <th>carte de fidélité</th> 
                    <th>numéro de carte fidélité</th> 
                </tr>
            </thead>

            <?php
            $reponse = $bdd->query('SELECT lastName, firstName, birthDate, CASE WHEN `card` = true THEN \'oui\' ELSE \'non\' END AS `card`, cardNumber FROM `clients`'); //on echappe le oui et non \'oui\', on n'en as pas besoin 
            while ($donnees = $reponse->fetch()) {
                ?>

                <tbody>
                    <tr>
                        <td><?= $donnees['lastName']; ?></td>
                        <td><?= $donnees['firstName']; ?></td>
                        <td><?= $donnees['birthDate']; ?></td>
                        <td><?= $donnees['card']; ?></td>
                        <td><?= $donnees['cardNumber']; ?></td>
                    </tr>
                </tbody>

                <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </table>
    </body>
</html>
