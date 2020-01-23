<?php

include_once '../racine.php';
include_once RACINE.'/services/TypeStageServices.php';
extract($_GET);

$es = new TypeStageServices();
$es->delete($es->findById($id));
header("location:../ajouterNiveauType.php");