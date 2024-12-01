<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestion Immobiliére</title>
    <link rel="stylesheet" href="../public/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <div class="container mt-3">
        <h1><?= $titre ?></h1>
        <?= $contenue ?>
    </div>

</body>

</html>