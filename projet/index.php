<?php
require_once "includes/fonctions.php";
    $chambres= getlistchambre();
    // echo "<pre>";
    // print_r($chambres);
    // echo "<pre>";

?>

<!-- spinner -->
<!-- <div class="spinner_box">
    <div class="spinner">
        <div></div>
        <div></div>
    </div>
</div> -->

<?php require("includes/header.php"); ?>

<div class="container d-flex">
    <?php foreach($chambres as $row): 
        $imgs = trim(($row['image']));
        $imgs = explode(" ", $imgs);
        ?>
        <div class="card m-2" style="width: 18rem;">
            <img src="image/<?= $imgs[0] ?>" class="card-img-top" alt="image">
            <div class="card-body">
                <p class="card-text"><?= $row['prix'] ?> € / nuit</p>
                <p>Situé a :<?= $row['ville'] ?></p>
                <p>Type :<?= $row['type'] ?></p>
                
                <a href="details.php?id_chambre=<?= $row['id_c'] ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                <?php if (isset($_SESSION["user_id"])&& $_SESSION["user_type"]=="admin"){?>
                    <a href="includes/chambres.php?suprimer=<?= $row['id_c'] ?>" class="btn btn-primary">suprimer</a>
                    <?php }?>

            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>