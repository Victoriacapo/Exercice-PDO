<?php
// on déclare un tableau errorsArray qui contiendra les messages d'erreurs
$errorsArray = [];

// on test si le pseudo est valide
$regexName = '/^[a-zA-ZÄ-ÿ-]+$/';
$regexEmail = '/^[a-z0-9.-]+@[a-z0-9.-]+.[a-z]{2,6}$/';
$regexPhone = '/^[0-9]{10}+$/';

if (!array_key_exists('lastname', $_POST) && isset($_POST['sendButton'])) {
//    $errorsArray['lastname'] = 'Veuillez choisir votre Nom';
//    $errorsArray['firstname'] = 'Veuillez choisir votre prénom';
//}
if (isset($_POST['lastname'])) { // recherche donnée input 
    $lastname = htmlspecialchars($_POST['lastname']); // declaration variable qui contient function htmlspe(qui traite données saisie ds le champs )
    // on test si regex n'est pas bonne
    if (!preg_match($regexName, $lastname)) {//le preg_match permet de tester la regex sur ma variable 
        $errorsArray['lastname'] = 'Veuillez inscrire un nom conforme';
    }
    // on test si c'est vide
    if (empty($lastname)) {
        $errorsArray['lastname'] = 'Veuillez saisir un nom pour continuer';
    }
}
if (isset($_POST['firstname'])) { // recherche donnée input 
    $firstname = htmlspecialchars($_POST['firstname']); // declaration variable qui contient function htmlspe(qui traite données saisie ds le champs )
    // on test si regex n'est pas bonne
    if (!preg_match($regexName, $firstname)) {//le preg_match permet de tester la regex sur ma variable 
        $errorsArray['firstname'] = 'Veuillez inscrire un prénom conforme';
    }
    // on test si c'est vide
    if (empty($firstname)) {
        $errorsArray['firstname'] = 'Veuillez saisir un prénom pour continuer';
    }
}

if (isset($_POST['birthdate'])) {
    if (empty($firstname)) {
    $errorsArray['birthdate'] = 'Veuillez saisir une date de naissance pour continuer';
    }
}

if (isset($_POST['phone'])) { // recherche donnée input pseudo
    $phone = htmlspecialchars($_POST['phone']); // declaration variable qui contient function htmlspe(qui traite données saisie ds le champs )
    // on test si regex n'est pas bonne
    if (!preg_match($regexPhone, $phone)) {//le preg_match permet de tester la regex sur ma variable 
        $errorsArray['phone'] = 'Veuillez inscrire un téléphone conforme';
    }
    // on test si c'est vide
    if (empty($phone)) {
        $errorsArray['phone'] = 'Veuillez saisir un téléphone pour continuer';
    }
}
if (isset($_POST['mail'])) { // recherche donnée input pseudo
    $mail = htmlspecialchars($_POST['mail']); // declaration variable qui contient function htmlspe(qui traite données saisie ds le champs )
    // on test si regex n'est pas bonne
    if (!preg_match($regexPhone, $phone)) {//le preg_match permet de tester la regex sur ma variable 
        $errorsArray['mail'] = 'Veuillez inscrire un mail conforme';
    }
    // on test si c'est vide
    if (empty($mail)) {
        $errorsArray['mail'] = 'Veuillez saisir un mail pour continuer';
    }
}
}

?>
    