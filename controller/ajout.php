<?php
require_once "../Model/CRUDAppartement.php";
include "../view/ajout.php";
$crud = new CRUDAppartement();
if (isset($_POST['ok'])) {
    $ref = htmlspecialchars($_POST['ref']);
    $prop = htmlspecialchars($_POST['prop']);
    $loc = htmlspecialchars($_POST['loc']);
    $surf = htmlspecialchars($_POST['surf']);
    $DU = htmlspecialchars($_POST['Du']);
    $nbPieces = htmlspecialchars($_POST['nbPieces']);
    echo $nbPieces;
    echo "<br>";
    $nature = htmlspecialchars($_POST['nature']);
    echo $nature;
    echo "<br>";
    $NbEtage = htmlspecialchars($_POST['NbEtage']);
    echo $NbEtage;
    echo "<br>";
    $Surf_Com = htmlspecialchars($_POST['Surf_Com']);
    echo $Surf_Com;
    echo "<br>";
    $imm = new immobiblier(NULL, $prop, $loc, $surf, $nbPieces, $DU, $nbPieces, $nature, $NbEtage, $Surf_Com);
    $res = $crud->AjouterApp($imm);
    if ($res) {
        header("location:../view/lister.php");
        exit;

?>
        
<?php
    }
}
