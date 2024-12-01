<?php
ob_start();
?>
<form action="../controller/ajout.php" method="post" class="form-controll">
    <label for="ref">Référence</label>
    <input type="text" id="ref" name="ref"><br>
    <label for="prop">Propriétaire</label>
    <input type="text" id="prop" name="prop"><br>
    <label for="loc">Localité</label>
    <input type="text" id="loc" name="loc"><br>
    <label for="surf">Surface</label>
    <input type="text" id="surf" name="surf"><br>
    <label for="nbp">Nombre de piéces</label>
    <input type="text" id="nbp" name="nbPieces"><br>
    <label for="Du">Domaine Usage</label>
    <select name="Du" id="Du">
        <option value="bureau">Bureau</option>
        <option value="domicile">Domicile</option>
    </select><br>
    <label for="nat">Nature</label>
    <select name="nature" id="nat">
        <option value="villa">villa</option>
        <option value="Appartement">Appartement</option>
    </select><br>
    <label for="NbEtage">Nombre d'Etage</label>
    <input type="text" id="NbEtage" name="NbEtage"><br>
    <label for="Surf_Com">Surface commune</label>
    <input type="text" id="Surf_Com" name="Surf_Com"><br>
    <input type="submit" value="Ajouter" name="ok" class="btn btn-primary btn-lg">
</form>
<?php
$titre = "Ajout d'un immobilier";
$contenue = ob_get_clean();
include "layout.php";
