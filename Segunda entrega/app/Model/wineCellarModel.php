<?php

class WineCellarModel {
    
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=vinoteca;charset=utf8', 'root', '');
    }

    public function getDB(){
        return $this->db;
    }

    public function getWineCellar(){
        $query = $this->db->prepare("SELECT id_bodega, nombre as Nombre, pais as Pais, provincia as Region FROM `bodegas`");
        $query->execute();
        
        $wineCellar = $query->fetchAll(PDO::FETCH_OBJ);

        Return $wineCellar;
    }

    public function getEspecificCellar($cellar){

        $query = $this->db->prepare("SELECT id, vinos.nombre as Vino, vinos.anio as Año, vinos.maridaje as Maridaje, vinos.cepa as Cepa,
                                            bodegas.pais as Pais, bodegas.provincia as Region 
                                    FROM bodegas 
                                    INNER JOIN vinos 
                                    ON bodegas.id_bodega = vinos.bodega 
                                    WHERE bodegas.id_bodega = ?");
        $query->execute([$cellar]);
        
        $wineCellar = $query->fetchAll(PDO::FETCH_OBJ);

        Return $wineCellar;
    }
    
    public function getCellar($cellar){
        $query = $this->db->prepare("SELECT * FROM `bodegas` WHERE id_bodega = ?");
        $query->execute([$cellar]);
        
        $wineCellar = $query->fetch(PDO::FETCH_OBJ);

        Return $wineCellar;
    }

    public function upDateCellar($nombre,$pais,$provincia,$descripcion,$idCellar){
        $query = $this->db->prepare("UPDATE `bodegas` SET nombre = ?, pais = ?, provincia = ?, descripcion = ? WHERE id_bodega = ?");
        $query->execute([$nombre,$pais,$provincia,$descripcion,$idCellar]);

        return $this->db->lastInsertId();
    }

    public function deleteCellar($cellar){
        $query = $this->db->prepare("DELETE FROM `bodegas` WHERE id_bodega = ?");
        $query->execute([$cellar]);

        return $query;
    }

    public function getListNameCellar(){
        $query = $this->db->prepare("SELECT id_bodega, nombre FROM `bodegas`");
        $query->execute();
        
        $wineCellar = $query->fetchAll(PDO::FETCH_OBJ);

        Return $wineCellar;
    }

    public function addCellar($nombre,$pais,$provincia,$descripcion){
        $query = $this->db->prepare("INSERT INTO `bodegas`(nombre, pais, provincia, descripcion) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre,$pais,$provincia,$descripcion]);

        return $this->db->lastInsertId();
    }
}