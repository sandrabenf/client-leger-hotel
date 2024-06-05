<?php
session_start();
// pour inclure la base 
require_once("dbconnect.php");
// ajouter un hotel
if (isset($_POST["ajout_hotel"])) {
    
    $nom= $_POST["nom"];
    $ville= $_POST["ville"];
    $description= $_POST["description"];
    $imgname= $_FILES["photo"]["name"];
    $imgtmpname= $_FILES["photo"]["tmp_name"]; // stocker l'image de manière temporaire
    $destination = $_SERVER["DOCUMENT_ROOT"]."/projet/Front/image/".$imgname;
    

   if( move_uploaded_file($imgtmpname, $destination )){
    // pour appeler la base 
    $db = db_connect();


    $request= $db->prepare("INSERT INTO `hotel`( `nom`, `ville`, `description`, `photo`) VALUES (?,?,?,?)"); 
    try {
    $request->execute(array($nom,$ville,$description,$imgname));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
   
   }
   header("Location: http://localhost/projet/Front");
}

