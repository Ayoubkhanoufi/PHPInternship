<?php

include_once '../racine.php';
include_once RACINE.'/services/NiveauEtude.php';
extract($_GET);

$es = new NiveauEtudeServices();
$es->delete($es->findById($id));
header("location:../ajouterNiveauType.php");