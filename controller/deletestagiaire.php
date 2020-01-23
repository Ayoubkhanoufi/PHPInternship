<?php

include_once '../racine.php';
include_once RACINE.'/services/StagiaireServices.php';
extract($_GET);

$es = new StagiaireServices();
$es->delete($es->findById($id));
header("location:../consulterStagiaire.php");