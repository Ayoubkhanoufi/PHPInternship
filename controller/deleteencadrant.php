<?php

include_once '../racine.php';
include_once RACINE.'/services/EncadrantServices.php';
extract($_GET);

$es = new EncadrantServices();
$es->delete($es->findById($id));
header("location:../ConsulterEncadrant.php");