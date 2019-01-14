<?php
require 'modelbdd.php'; //appel des modèles
require 'modelListpatient.php';

$patientObj = new listPatients(); //instancie un nouvel objet
$show = $patientObj->showPatient(); //
?>