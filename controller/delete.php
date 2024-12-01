<?php
require_once "../Model/CRUDAppartement.php";
$ref = htmlspecialchars($_GET['ref']);
$crud = new CRUDAppartement();
$crud->SupprimerApp($ref);
header("location:all.php");
exit;
