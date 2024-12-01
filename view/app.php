<?php
ob_start();
?>
<table class="table">
    <thead>
        <tr>
            <th>Référence</th>
            <th>Propriétaire</th>
            <th>Localité</th>
            <th>Surface</th>
            <th>Nombre de Piéces</th>
            <th>Domaine Usage</th>
            <th>Nature</th>
            <th>Nombre Etage</th>
            <th>Surface Commune</th>
            <th></th>
            <th>Action</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= $imm[0] ?></td>
            <td><?= $imm[1] ?></td>
            <td><?= $imm[2] ?></td>
            <td><?= $imm[3] ?></td>
            <td><?= $imm[4] ?></td>
            <td><?= $imm[5] ?></td>
            <td><?= $imm[6] ?></td>
            <td><?= $imm[7] ?></td>
            <td><?= $imm[8] ?></td>
            <td>
                <a href="../controller/delete.php?ref=<?= $imm[0] ?>" class="btn btn-danger btn-sm">Supprimer</a>
            </td>
            <td>
                <a href="../controller/update.php?ref=<?= $imm[0] ?>" class="btn btn-primary btn-sm">Editer</a>
            </td>
        </tr>
    </tbody>
</table>
<?php
$titre = "";
$contenue = ob_get_clean();
include "layout.php";
?>