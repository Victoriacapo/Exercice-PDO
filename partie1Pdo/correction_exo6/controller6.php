<?php
require 'modelbdd6.php';
require 'modelspectacle.php';

$showObj = new spectacle(); //instancie un nouvel objet
$showName = $showObj->Shows(); //appel la function showClients

?>
