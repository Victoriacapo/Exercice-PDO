<?php
if (isset($_POST['sendButton'])) { //si formulaire a été envoyé
    // on affiche nos résultats
    echo 'Bonjour, votre nom est ' . $_POST['lastname'] . ', et votre prénom est ' . $_POST['firstname'] . '.';
}

try {
        $bdd = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'victoriac', '1Travail');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
if (isset($_POST['sendButton'])) { // si on envoie le formulaire
    // on récupère les $_POST et on en fait des variables
    $nom = $_POST['lastname'];
    $prenom = $_POST['firstname'];
    $datenaissance = $_POST['birthdate'];
    $telephone = $_POST['phone'];
    $email = $_POST['mail'];

   $send = $bdd->query("INSERT INTO patients (lastname, firstname, birthdate, phone, mail ) VALUES('$nom', '$prenom', '$datenaissance', '$telephone', '$email')");
}
    ?>




