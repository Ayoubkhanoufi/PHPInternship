<?php
include_once '../racine.php';
include_once RACINE.'/services/TypeStageServices.php';
extract($_POST);


$es = new TypeStageServices();
                  
$es->create(new typeStage(1,$type));


header("location:../ajouterNiveauType.php");