<?php
require_once "../Model/config.php";
$cnx = new config();
$pdo = $cnx->getConfig();
$tabNom = ["omar", "aziz", "yasmine", "ahmed", "asma", "sarra", "mariem"];
$tabLoc = ["tunis", "Rades", "Ariana", "Ben arous", "Marsa", "Ezzahra", "Boumhal"];
$sql = "";
for ($i = 0; $i < 100; $i++) {
    $j = random_int(0, 6);
    $prop = $tabNom[$j];
    $loc = $tabLoc[$j];
    $surf = random_int(50, 300);
    $nbP = random_int(1, 7);
    $du = random_int(0, 1);
    if ($du == 1) {
        $DU = "bureau";
    } else {
        $DU = "domicile";
    }
    $nat = random_int(0, 1);
    if ($nat == 0) {
        $nature = "villa";
    } else {
        $nature = "Appartement";
    }
    if ($nature == "Appartement") {
        $nbEtage = 0;
    } else {
        $nbEtage = random_int(1, 5);
    }
    if ($nature == "villa") {
        $SC = 0;
    } else {
        $SC = random_int(50, 100);
    }
    $sql .= "INSERT INTO immobilier VALUES (NULL,'$prop','$loc',$surf,$nbP,'$DU','$nature',$nbEtage,$SC);";
}
$pdo->exec($sql);
