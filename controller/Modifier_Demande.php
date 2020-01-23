<?php
include_once '../racine.php';
include_once RACINE.'/services/StageServices.php';

$st = new StageServices();

extract($_POST);
$st->updateBySession(new Stage($id,$departement,1,$typestage,1,$datedebut,$datefin,1,1));

header("location:../Mademande_Stage.php");   
?>