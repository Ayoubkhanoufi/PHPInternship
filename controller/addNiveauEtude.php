<?php
include_once '../racine.php';
include_once RACINE.'/services/NiveauEtude.php';
extract($_POST);


$es = new NiveauEtudeServices();
                  
$es->create(new niveauetude(1,$niveau));


header("location:../ajouterNiveauType.php");