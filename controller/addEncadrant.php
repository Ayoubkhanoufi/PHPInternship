<?php
include_once '../racine.php';
include_once RACINE.'/services/EncadrantServices.php';
extract($_POST);


$es = new EncadrantServices();
                  
$es->create(new encadrant(1,$nom,$departement,$civilite,$prenom,$email,$telephone,$adresse));


header("location:../ajouterEncadrant.php");