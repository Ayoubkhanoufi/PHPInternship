<?php
include_once '../racine.php';
include_once RACINE.'/services/StagiaireServices.php';

$st = new StagiaireServices();

extract($_POST);
$st->updateCompte(new Stagiaire($id,$niveau,$civilite,$nom,$prenom,$email,$telephone,$adresse,$datedenaissance,$mdp,$cv,$specialite, $etablissement,$demandestage));

header("location:../moncompte.php");   
?>