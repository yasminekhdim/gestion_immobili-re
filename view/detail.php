<?php
ob_start();
include "../Model/CRUDAppartement.php";
$crud = new CRUDAppartement();
$ref = $_GET['ref'];
$imm = $crud->RecupererApp($ref);
?>
<div class="row">
    <div class="col-6">
        <div class="card">
            <img src="https://picsum.photos/400/?" alt="photo">
        </div>
    </div>
    <div class="col-6">
        <h3><?= $imm[6] ?> <br> <?= $imm[2] ?></h3>
        <p>
            Surface : <?= $imm[3] ?><br>
            Nombre de piéces : <?= $imm[4] ?><br>
            domaine de usage : <?= $imm[5] ?><br>
            <?php
            if ($imm[6] == "villa") { ?>
                Nombre d'étage : <?= $imm[7] ?><br>
            <?php
            }
            if ($imm[6] == "Appartement") {
            ?>
                Surface Commune : <?= $imm[8] ?><br>
            <?php
            }
            ?>
        </p>
    </div>
</div>
<?php
$titre = "Détail";
$contenue = ob_get_clean();
include "layout.php";
?>