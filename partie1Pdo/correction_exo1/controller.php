<?php
require 'modelbdd.php';
require 'modelclient.php';

$clientObj = new clients(); //instancie un nouvel objet
$clientsList = $clientObj->showClients(); //appel la function showClients

?>
  
