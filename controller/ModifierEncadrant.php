<?php
include_once '../racine.php';
include_once RACINE.'/services/EncadrantServices.php';

$st = new EncadrantServices();

extract($_POST);
$st->update(new encadrant($id,$nom,$departement,$civilite,$prenom,$email,$telephone,$adresse));

header("location:../consulterEncadrant.php");   
?>