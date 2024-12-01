<?php
ob_start()
?>
<form action="../controller/update.php" method="post" class="form-controll">
    <label for="ref">Référence</label>
    <input type="text" id="ref" name="ref" value="<?= $imm[0] ?>"><br>
    <label for="prop">Propriétaire</label>
    <input type="text" id="prop" name="prop" value="<?= $imm[1] ?>"><br>
    <label for="loc">Localité</label>
    <input type="text" id="loc" name="loc" value="<?= $imm[2] ?>"><br>
    <label for="surf">Surface</label>
    <input type="text" id="surf" name="surf" value="<?= $imm[3] ?>"><br>
    <label for="nbp">Nombre de piéces</label>
    <input type="text" id="nbp" name="nbPieces" value="<?= $imm[4] ?>"><br>
    <label for="Du">Domaine Usage</label>
    <select name="Du" id="Du">
        <option value="bureau">Bureau</option>
        <option value="domicile">Domicile</option>
    </select><br>
    <select name="nature" id="nat">
        <option value="villa">villa</option>
        <option value="Appartement">Appartement</option>
    </select><br>
    <label for="NbEtage">Nombre d'Etage</label>
    <input type="text" id="NbEtage" name="NbEtage" value="<?= $imm[7] ?>"><br>
    <label for="Surf_Com">Surface commune</label>
    <input type="text" id="Surf_Com" name="Surf_Com" value="<?= $imm[8] ?>"><br>
    <input type="submit" value="Modifier" name="ok1" class="btn btn-primary btn-lg">
</form>
<?php
$titre = "Modification des données d'un Immobilier";
$contenue = ob_get_clean();
include "layout.php";
