<?php
include_once '../racine.php';
include_once RACINE.'/services/RhServices.php';
extract($_POST);


$es = new RhServices();
                  
$es->create(new responsableRH(1,$nom,$prenom,$email,$telephone,$adresse,$login,$mdp));


header("location:../ajouterReponsable.php");