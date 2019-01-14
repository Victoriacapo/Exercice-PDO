<?php
require 'modelbdd7.php'; //appel des modèles
require 'modelListClient.php';

$clientObj = new agenda(); //instancie un nouvel objet
$clientsList = $clientObj->agendaClient(); //

?>