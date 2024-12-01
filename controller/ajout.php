<?php
require_once "../Model/CRUDAppartement.php";
include "../view/ajout.php";
$crud = new CRUDAppartement();
if (isset($_POST['ok'])) {
    $ref = htmlspecialchars($_POST['ref']);
    echo $ref;
    echo "<br>";
    $prop = htmlspecialchars($_POST['prop']);
    echo $prop;
    echo "<br>";
    $loc = htmlspecialchars($_POST['loc']);
    echo $loc;
    echo "<br>";
    $surf = htmlspecialchars($_POST['surf']);
    echo $surf;
    echo "<br>";
    $DU = htmlspecialchars($_POST['Du']);
    echo $DU;
    echo "<br>";
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
    $imm = new immobiblier(NULL, $prop, $loc, $surf, $nbPieces, $DU, $nature, $NbEtage, $Surf_Com);
    echo "<br>";
    var_dump($imm);
    $res = $crud->AjouterApp($imm);
    if ($res) {
        header("location:../view/lister.php");
        exit;

?>
        
<?php
    }
}
