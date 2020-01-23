<?php
include_once '../racine.php';
include_once RACINE.'/services/StagiaireServices.php';

$st = new StagiaireServices();

extract($_POST);
$st->update(new Stagiaire($id,$niveau,$civilite,$nom,$prenom,$email,$telephone,$adresse,$datedenaissance,$mdp,1,$specialite, $etablissement,$demandestage));

header("location:../consulterStagiaire.php");   
?>