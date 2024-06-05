<?php 

require_once("dbconnect.php");
function getlisthotel(){
    $db = db_connect();
    $request= $db->prepare("SELECT * FROM hotel");
    $request->execute();
    $hotels = $request->fetchAll(PDO::FETCH_ASSOC);
    return $hotels;
} 


function getlistchambre(){
    $db = db_connect();
    $request= $db->prepare("SELECT type, prix, nom, chambre.image, description, ville, hotel.id as id_h, id_hotel, chambre.id as id_c, nom FROM chambre, hotel WHERE hotel.id = id_hotel");
    $request->execute();
    $chambres = $request->fetchAll(PDO::FETCH_ASSOC);
    return $chambres;
}


function getchambreinfo($id){
    $db = db_connect();
    $request= $db->prepare("SELECT type, prix, nom, chambre.image, description, ville, hotel.id as id_h, id_hotel, chambre.id as id_c, nom FROM chambre, hotel WHERE hotel.id = id_hotel AND chambre.id=?");
    $request->execute(array($id));
    $chambre = $request->fetch(PDO::FETCH_ASSOC);

    return $chambre;
}
