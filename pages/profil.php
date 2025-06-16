<?php
    include("../inc/fonction.php");

    
    $id_propriete = null;
    if (isset($_GET['propriete'])) {
        $id_propriete = $_GET['propriete'];
    } else {
        echo "Propriete not found.";
        $id_propriete = 0;
    }
    $info_propriete = info_pro($id_propriete);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de la propriétés</title>
</head>
<style>
    p{
        color:rgb(112, 112, 112);
    }
</style>
<body>
    <div class="container">
        
        <div class="d-flex flex-row column-gap-5 justify-content-Evenly">

            <div class="col-sm-6 col-md-4 mb-4">
                <img src="../assets/images/<?= $info_propriete["id_propriete"] ?>.jpg" class="img-fluid rounded">
            </div>

            <div class="d-flex flex-column align-items-center align-self-center">

                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="../assets/images/1.jpg" style="width: 50px; height: 50px; border-radius: 50%;">
                    </div>
                    <div class="flex-row-1">
                        <p class="fw-semibold fs-5 ms-2">Agent en charge de la Propriété : <?= $info_propriete["nom_agent"] ?> <?= $info_propriete["prenom_agent"] ?></p>
                    </div>
                </div>

                <div>
                    <p class="fw-semibold fs-5 ms-2">Prix de la Propriété : <?= $info_propriete["prix_propriete"] ?> Ar</p>
                </div>
                <div>
                    <p class="fw-semibold fs-5 ms-2">Type de la Propriété : <?= $info_propriete["type_maison"] ?></p>
                </div>
                <div>
                    <p class="fw-semibold fs-5 ms-2">Ville de la Propriété : <?= $info_propriete["ville_propriete"] ?></p>
                </div>

            </div>
            


        </div>

    </div>
</body>
</html>