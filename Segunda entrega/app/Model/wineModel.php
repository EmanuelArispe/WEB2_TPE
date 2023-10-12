<?php
class WineModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=vinoteca;charset=utf8', 'root', '');
    }


    public function getWineList(){
        $query = $this->db->prepare("SELECT id,vinos.nombre as Nombre, bodegas.nombre as Bodega, cepa as Cepa, anio as Año 
                                    FROM `vinos`
                                    INNER JOIN `bodegas`
                                    ON vinos.bodega = bodegas.id_bodega");
        $query->execute();
        
        $wines = $query->fetchAll(PDO::FETCH_OBJ);

        return $wines;
    }


    public function getWine($wine){
        $query = $this->db->prepare("SELECT id, vinos.nombre as nombre, bodegas.nombre as bodega, maridaje, cepa, anio, stock, precio, caracteristica, recomendado 
                                    FROM `vinos`
                                    INNER JOIN `bodegas`
                                    ON vinos.bodega = bodegas.id_bodega 
                                    WHERE id = ? ");
        $query->execute([$wine]);
        
        $wine = $query->fetch(PDO::FETCH_OBJ);
        
        return $wine;
    }

    public function upDateWine($nombre,$bodega,$anio,$maridaje,$cepa,$stock,$precio,$caracteristica,$recomendado,$id){

        $query = $this->db->prepare("UPDATE `vinos` SET nombre = ?, bodega = ?, anio = ?, maridaje = ?, cepa = ?,
                                                        stock = ?, precio = ?, caracteristica = ?, recomendado = ? WHERE id = ?");

        $query->execute([$nombre,$bodega,$anio,$maridaje,$cepa,$stock,$precio,$caracteristica,$recomendado,$id]);
        
        return $this->db->lastInsertId();
    }

    public function deleteWine($id){
        $query = $this->db->prepare("DELETE FROM `vinos` WHERE id = ?");
        $query->execute([$id]);
        
        return $query;
    }

    public function addWine($nombre, $bodega, $anio, $maridaje, $cepa, $stock, $precio, $caracteristica, $recomendado){
        $query = $this->db->prepare("INSERT INTO `vinos`(nombre, bodega, anio, maridaje, cepa, stock, precio, caracteristica, recomendado) VALUES (?,?,?,?,?,?,?,?,?)");
        $query->execute([$nombre, $bodega, $anio, $maridaje, $cepa, $stock, $precio, $caracteristica, $recomendado]);

        return $this->db->lastInsertId();
    }
}