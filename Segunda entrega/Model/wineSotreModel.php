<?php

class WineStoreModel {
    
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=vinoteca;charset=utf8', 'root', '');
    }

    public function getDB(){
        return $this->db;
    }

    public function getWineStore(){
        $query = $this->db->prepare("SELECT * FROM `bodegas`");
        $query->execute();
        
        $wineStore = $query->fetchAll(PDO::FETCH_OBJ);

        Return $wineStore;
    }
}