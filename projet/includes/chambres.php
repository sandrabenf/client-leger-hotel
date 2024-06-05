<?php
session_start();
// pour inclure la base 
require_once("dbconnect.php");
// ajouter un hotel
if (isset($_POST["ajout_chambre"])) {
    
    $type= $_POST["type"];
    $prix= $_POST["prix"];
    $hotel= $_POST["hotel"];


    $fileNames = "";

    
    foreach ($_FILES["photos"]["name"] as $key => $value) {
        $imgtmpname=$_FILES["photos"]["tmp_name"][$key];
        $imgname=$_FILES["photos"]["name"][$key];
        $destination = $_SERVER["DOCUMENT_ROOT"]."/projet/image/".$imgname;
        $fileNames= $fileNames." ". $imgname;

        move_uploaded_file($imgtmpname, $destination);
    }

    $db = db_connect();

    $request= $db->prepare("INSERT INTO `chambre`(`type`, `prix`, `id_hotel`, `image`) VALUES (?,?,?,?)");
    $request->execute(array($type,$prix,$hotel,$fileNames));
    
    header("Location: http://localhost/projet/");
}

if (isset($_GET["suprimer"])) {
    $db = db_connect();
    $request = $db->prepare("delete from chambre where id = ?");
    $request->execute(array($_GET["suprimer"]));
    header("Location: http://localhost/projet/");
}
