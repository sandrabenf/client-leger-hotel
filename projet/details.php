<?php 
require_once "includes/fonctions.php";
require("includes/header.php");
$chambre= getchambreinfo($_GET['id_chambre']);
;

// Récupérer l'hôtel depuis la chambre (GET depuis l'id) et stocker dans une variable


// Récupérer l'hôtel depuis la chambre (GET depuis l'id) et stocker dans une variable


$imgs = trim($chambre['image']);
$imgs = explode(" ", $imgs);
?>

<div class="container">
    <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="image/<?= $imgs[0] ?>" class="d-block w-100" alt="image">
        </div>
        <div class="carousel-item">
        <img src="image/<?= $imgs[0] ?>" class="d-block w-100" alt="image">
        </div>
        <div class="carousel-item">
        <img src="image/<?= $imgs[0] ?>" class="d-block w-100" alt="image">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>

<div>
    <p class="card-text"><?= $chambre['prix'] ?> € / nuit</p>
    <p>Situé a :<?= $chambre['ville'] ?></p>
    <p>Type de chambre:<?= $chambre['type'] ?></p>
    <p>Nom de l'hotel :<?= $chambre['nom'] ?></p>
    <p>Description :<?= $chambre['description'] ?></p>

    <form action="includes/reserver.php" method="post">
        <input type="texte" name="prix" value="<?= $chambre['prix'] ?>" hidden id= "prix">
        <div class="form-check">
            <input class="form-check-input"name="option[]" type="checkbox" value="12" id="petitdej">
            <label class="form-check-label" for="flexCheckDefault">
               Petit déjeuner 12€
         <!-- Afficher la valeur de la variable 'petit déjeuner' de l'objet hôtel -->
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="option[]" type="checkbox" value="30" id="diner">
            <label class="form-check-label" for="flexCheckChecked">
                Diner   30€<!-- Afficher la valeur de la variable 'diner' de l'objet hôtel -->
            </label>
        </div>
       

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">date début</label>
            <input type="date" class="form-control" name="date_debut" id="datedebut" >
           
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">date fin</label>
            <input type="date" class="form-control" name="date_fin" id="datefin">
        </div>
     <p >Prix total: <span id="prixTotal"> </span></p>
 
        <input type="text" name="chambre"value="<?= $chambre['id_c'] ?>" hidden>

        <button name="reserver" >Reserver </button>

    </form>
    
</div>
<script>
    let prixdiner=0;
    let prixpetitdejeuner=0;

    document.getElementById("datefin").addEventListener("change",()=> {
        if (document.getElementById("diner").checked ){
        prixdiner=document.getElementById("diner").value;
    }
    if (document.getElementById("petitdej").checked ){
        prixpetitdejeuner=document.getElementById("petitdej").value;
    }
        let date1 = new Date (document.getElementById("datedebut").value);
        let date2 = new Date (document.getElementById("datefin").value);
        let temps = 1000*60*60*24; 
        let diff_temps = date2 - date1;
        let diff_jours = Math.floor (diff_temps/temps);
        let prix_sejour =diff_jours*document.getElementById("prix").value;
        prixTotal= Number(prixdiner)+ Number(prixpetitdejeuner) + prix_sejour;
        document.getElementById("prixTotal").innerHTML=prixTotal;
        
    })

    </script>
<?php //include 'includes/footer.php'; ?>


