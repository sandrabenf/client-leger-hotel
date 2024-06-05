<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- bibliotheque font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Votre Titre de Site</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<header>

    <nav class="d-flex justify-content-between w-100">
        <div>
            <a href="index.php">Accueil</a>
            <a href="about.php">À propos</a>
            <a href="contact.php">Contact</a>
        </div>

        <div class="d-flex justify-content-end">
            <?php if(isset($_SESSION["user_id"])) { 
                if( $_SESSION ["user_type"]  == "admin"){ ?>
                <a href="ajouthotel.php">Ajout hotel</a> 
                <a href="ajoutchambre.php">Ajout chambre</a> 
            <?php }?>
                <a href="#"><?= $_SESSION["user_name"]?></a> 
                <a href="includes/user.php?logout=logout"><i class="fa-solid fa-power-off"></i></a> 
           <?php } else{ ?>

            <a href="inscription.php">inscription</a>
            <a href="connexion.php">Connexion</a>

            <?php } ?>

        </div>

    </nav>
</header>


<?php

// if(isset($_SESSION["user_id"])){
//     echo '<a href="#">'. $_SESSION["user_name"]. '</a> ';
// }else{
//     echo '<a href="inscription.php">inscription</a>
//     <a href="connexion.php">Connexion</a>';
// }

?>