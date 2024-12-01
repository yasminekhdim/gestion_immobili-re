<?php
ob_start();
?>
<br>
<br>
<a href="../controller/ajout.php" class="btn btn-primary btn-sm">Ajouter un Immobilier</a>
<br>
<br>
<form action="../controller/search.php" method="post">
    <b>Réference</b><input type="text" id="searchRef" placeholder="Rechercher par référence" class="form-control" name="ref">
    <input type="submit" value="Rechercher" name="ok3">
</form>
<br>
<br>
<table class="table" id="example">
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
        <?php
        foreach ($Lesimm as $imm) {
        ?>
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
        <?php
        }
        ?>

    </tbody>

</table>
<?php
$titre = "Liste des Immobilier";
$contenue = ob_get_clean();
include "layout.php";
