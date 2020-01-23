<?php

include_once '../racine.php';
include_once RACINE.'/services/StageServices.php';
extract($_GET);

$es = new StageServices();
$es->delete($es->findById($id));
header("location:../consulterStage.php");