<?php
require 'modelbdd3.php';
require 'modeluser.php';

$userObj = new user(); // instancie nouvel objet
$userList = $userObj->number(); //

?>
