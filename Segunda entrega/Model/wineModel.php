<?php
class WineModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=vinoteca;charset=utf8', 'root', '');
    }


    public function getWine(){
        $query = $this->db->prepare("SELECT * FROM `vinos`");
        $query->execute();
        
        $wines = $query->fetchAll(PDO::FETCH_OBJ);

        Return $wines;
    }

    
}