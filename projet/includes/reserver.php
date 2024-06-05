<?php
session_start();
// pour inclure la base 
require_once("dbconnect.php");
if (isset($_POST["reserver"])) {
    $debut=$_POST["date_debut"];
    $fin=$_POST["date_fin"];
    $date_debut=new DateTime ($_POST["date_debut"]); 
    $date_fin=new DateTime ($_POST["date_fin"]);
    $intervalle= $date_debut ->diff($date_fin);
    $jour=$intervalle ->days;
    $chambre=$_POST["chambre"];
    $id_user= $_SESSION['user_id'];
    $option=$_POST["option"];
    $prix=$_POST["prix"];
    $prix_sejour=$prix*$jour;
    $prix_option=0;
    foreach ($option as $v) {
      $prix_option += $v;

    }
    $prix_total=$prix_option+$prix_sejour;
    $option = implode(',', $option);
    $db = db_connect();

    $request=$db->prepare("INSERT INTO `reservation`( `date_debut`, `date_fin`, `id_user`, `id_chambre`, `options`,`prix_reservation`) VALUES (?,?,?,?,?,?)");
    $request->execute(array($debut,$fin,$id_user,$chambre,$option,$prix_total));

    echo '<p>  Votre réservation a bien été prise en compte. À votre arrivée, veuillez vous présenter à l accueil pour procéder au règlement. Merci et à bientôt !




    <a href="http://localhost/projet/index.php"> retour vers la page principale</p>';
}



