<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice6 PDO - Partie 1 : Lire des données</title>
    </head>
    <body>
        <p>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. 
            Trier les titres par ordre alphabétique. 
            Afficher les résultat comme ceci : Spectacle par artiste, la date et l'heure.</p>
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
                    <th>title</th> 
                    <th>performer</th> 
                    <th>date</th>
                    <th>startTime</th> 
                </tr>
            </thead>

            <?php
            $reponse = $bdd->query('SELECT title, performer, date, startTime FROM shows');
            while ($donnees = $reponse->fetch()) {
                ?>

                <tbody>
                    <tr>
                        <td><?= $donnees['title']; ?></td>
                        <td><?= $donnees['performer']; ?></td>
                        <td><?= $donnees['date']; ?></td>
                        <td><?= $donnees['startTime']; ?></td>
                    </tr>
                </tbody>

                <?php
            }

            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </table>
    </body>
</html>
