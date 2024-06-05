<?php
session_start();
require_once("dbconnect.php");
//inscription
if (isset($_POST["envoyer"])) {
    $nom= $_POST["name"];
    $email= $_POST["email"];
    $sujet= $_POST["subject"];
    $message= $_POST["message"];

    $db = db_connect();

    $request= $db->prepare ("INSERT INTO `contact`( `email`, `sujet`, `message`,`nom`) VALUES (?,?,?,?)");

    $request->execute(array($email,$sujet,$message,$nom));

    header("Location: http://localhost/projet/Front");

}

