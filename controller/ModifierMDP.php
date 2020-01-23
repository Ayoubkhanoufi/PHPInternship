<?php
include_once '../racine.php';
include_once RACINE.'/services/StagiaireServices.php';

$st = new StagiaireServices();

extract($_POST);
$st->updatepassword(new Stagiaire($id,1,1,1,1,1,1,1,1,$mdp,1,1,1,1));

header("location:../statistiqueStagiaire.php");   
?>