<?php
require_once "../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();

if (isset($_POST['ok3'])) {
    $ref = htmlspecialchars($_POST['ref']);
    $imm = $crud->RecupererApp($ref);
    if ($imm == NULL) {
        echo "Aucun immobilier trouvé !";
    } else {
        include "../view/app.php";
    }
}
