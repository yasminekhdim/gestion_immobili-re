<?php
require_once "../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();
if (isset($_POST['ok1'])) {
    $prop = $imm->getPropriétaire();
    $loc = $imm->getLocalité();
    $surf = $imm->getSurface();
    $nbPieces = $imm->getNbPieces();
    $DU = $imm->getDomaineUsage();
    $nature = $imm->getNature();
    $NbEtage = $imm->getNbEtage();
    $Surf_com = $imm->getSurfCom();
    $imm=new immobiblier($ref, $prop, $loc, $surf, $nbPieces, $DU,$nature,$NbEtage,$Surf_com);
    $res = $crud->ModifierApp($imm);
    if ($res) {
        header("location:all.php");
        exit;
    }
} else {
    $ref = $_GET['ref'];
    $imm = $crud->RecupererApp($ref);
    include "../view/update.php";
}
