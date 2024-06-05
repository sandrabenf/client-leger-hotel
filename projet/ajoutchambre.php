<?php 
require_once("includes/fonctions.php");
require_once("includes/header.php");

$hotels=getlisthotel();
?>
<div class="container">
<form action="includes/chambres.php" method="post" enctype="multipart/form-data"> <!-- lorsque j'utilise photo ou fichier  -->

    <select class="form-select" name="type">
        <option selected>selectionner le type</option>
        <option value="suites">Suites</option>
        <option value="standard">standard</option>
    </select>

    <div class="mb-3">
        <label  class="form-label">Prix</label>
        <input type="number" class="form-control"  name="prix">
    </div>

    <select class="form-select" name="hotel">
        <option selected>selectionner l'hotel</option>
        <?php foreach($hotels as $row): ?>
            <option value="<?= $row["id"]?>" ><?= $row["nom"]?></option>
        <?php endforeach; ?>
       
    </select>

    <div class="mb-3">
        <label  class="form-label">Nom</label>
        <input type="file" class="form-control" multiple  name="photos[]">
    </div>
    <button type="submit" name="ajout_chambre"class="btn btn-primary">Ajouter chambres</button>
 
</form>
</div>


<?php include 'includes/footer.php'; ?>