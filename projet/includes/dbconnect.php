<?php
function db_connect() {   
    try {
        $db = new PDO("mysql:host=localhost;dbname=hotel","root","root");
        return $db;
    } catch (PDOException $e) {
        echo "". $e->getMessage();
    }
}