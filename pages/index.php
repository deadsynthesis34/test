<?php
    include("../inc/fonction.php");
    $proprietes = aff_propriete();
    $count = count($proprietes); 
    echo $count;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    a{
        color:rgb(112, 112, 112);
        text-decoration: none;
    }
</style>
<body>
    <div class="text-center my-4">
        <h1 class="fw-bold">Propriétés disponibles</h1>
        <h4>Vous avez un large choix de services</h4>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
        <?php foreach ($proprietes as $aff_propriete) { ?>
            
            <div class="col-sm-6 col-md-4 mb-4">
                <a href="model.php?p=profil.php&propriete=<?= $aff_propriete["id_propriete"] ?>" class="text-center">
                    <img src="../assets/images/<?= $aff_propriete["id_propriete"] ?>.jpg" alt="Image 1" class="img-fluid rounded">
                    <p class="fw-medium fs-5"> <?= $aff_propriete["type_maison"] ?></p>
                    <p class="fw-medium fs-5">Prix : <?= $aff_propriete["prix"] ?> Ar</p>
                </a>

            </div>

        <?php } ?>
           
        </div>
    </div>

</body>
</html>