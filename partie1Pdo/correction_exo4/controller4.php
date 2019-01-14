<?php
require 'modelbdd4.php';
require 'modelfidelitycard.php';

$cardObj = new clientcard(); // instancie nouvel objet
$clientaveccarte = $cardObj->card(); //

?>

