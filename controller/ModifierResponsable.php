<?php
include_once '../racine.php';
include_once RACINE.'/services/RhServices.php';

$st = new RhServices();

extract($_POST);
$st->update(new responsableRH($id,$nom,$prenom,$email,$telephone,$adresse,$login,$mdp));

header("location:../consulterResRH.php");   
?>