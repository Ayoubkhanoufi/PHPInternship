<?php
include_once '../racine.php';
include_once RACINE.'/services/StagiaireServices.php';
extract($_POST);


$es = new StagiaireServices();

$es->create(new Stagiaire(1,$niveau,$civilite,$nom,$prenom,$email,$telephone,$adresse,$datedenaissance,$mdp,$cv,$specialite, $etablissement,$demandestage));


header("location:../ajouterStagiaire.php");