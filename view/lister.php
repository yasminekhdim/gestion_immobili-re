<?php
ob_start();
?>
<br>
<a href="../controller/all.php" class="btn btn-primary btn-lg">Lister</a>
<?php
$titre = "insertion effectué avec succès !";
$contenue = ob_get_clean();
include "../view/layout.php";
