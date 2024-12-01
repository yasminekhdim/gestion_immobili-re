<?php
require_once "../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();
if (isset($_POST['ok1'])) {
    $ref = htmlspecialchars($_POST['ref']);
    $prop = htmlspecialchars($_POST['prop']);
    $loc = htmlspecialchars($_POST['loc']);
    $surf = htmlspecialchars($_POST['surf']);
    $nbPieces = htmlspecialchars($_POST['nbPieces']);
    $DU = htmlspecialchars($_POST['Du']);
    $nature = htmlspecialchars($_POST['nature']);
    $NbEtage = htmlspecialchars($_POST['NbEtage']);
    $Surf_com = htmlspecialchars($_POST['Surf_Com']);
    $imm = new immobiblier($ref, $prop, $loc, $surf, $nbPieces, $DU, $nature, $NbEtage, $Surf_com);
    $res = $crud->ModifierApp($imm);
    echo $res;
    if ($res) {
        header("location:all.php");
        exit;
    }
} else {
    $ref = $_GET['ref'];
    $imm = $crud->RecupererApp($ref);
    include "../view/update.php";
}
