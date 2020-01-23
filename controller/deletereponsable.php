<?php

include_once '../racine.php';
include_once RACINE.'/services/RhServices.php';
extract($_GET);

$es = new RhServices();
$es->delete($es->findById($id));
header("location:../ConsulterResRh.php");