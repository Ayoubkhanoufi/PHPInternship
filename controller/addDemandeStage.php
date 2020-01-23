<?php
include_once '../racine.php';
include_once RACINE . '/Connexion/connexion.php';
include_once RACINE.'/services/StagiaireServices.php';
include_once RACINE.'/services/StageServices.php';
extract($_POST);


$es = new StagiaireServices();
$st = new StageServices();

$es->create(new Stagiaire(1,$niveau,$civilite,$nom,$prenom,$email,$telephone,$adresse,$datedenaissance,$mdp,$cv,$specialite, $etablissement,$demandestage));

$lastId = $es->getLastStagiaireId();
$date = date("d/m/Y");

$st->create(new stage(1,$departement,$lastId,$typestage,$date,$datedebut,$datefin,1,'En cour'));

        
header("location:../dmdStage.php");

