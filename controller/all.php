<?php
ob_start();
require_once "../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();
$Lesimm = $crud->listerApp();
include "../view/all.php";
