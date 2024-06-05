<?php require("includes/header.php"); ?>
<div class="container">
<form action="includes/hotel.php" method="post" enctype="multipart/form-data"> 


   

        <div class="mb-3">
        <label  class="form-label">Nom</label>
        <input type="text" class="form-control"  name="nom">
    </div>

    <div class="mb-3">
        <label  class="form-label">Ville</label>
        <input type="text" class="form-control"  name="ville">
    </div>

    <div class="input-group">
    <span class="input-group-text">Description</span>
    <textarea class="form-control" name="description"></textarea>
    </div>


    <div class="mb-3">
        <label  class="form-label">Nom</label>
        <input type="file" class="form-control"  name="photo">
    </div>
    <button type="submit" name="ajout_hotel"class="btn btn-primary">Ajouter hotel</button>
 
</form>
</div>


<?php include 'includes/footer.php'; ?>