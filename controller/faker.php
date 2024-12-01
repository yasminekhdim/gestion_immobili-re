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
    $SEC = random_int(50, 100);
    $sql .= "INSERT INTO appartement VALUES (NULL,'$prop','$loc',$surf,$nbP,'$DU',$SEC);";
}
$pdo->exec($sql);
