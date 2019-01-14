<?php

require 'modelbdd2.php';
require 'modelshow.php';

$show = new showtypes(); // instancie nouvel objet
$showList = $show->types();//appel ma class

?>

    