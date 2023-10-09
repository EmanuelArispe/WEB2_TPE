<?php
class WineModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=vinoteca;charset=utf8', 'root', '');
    }


    public function getWineList(){
        $query = $this->db->prepare("SELECT id, nombre as Nombre, bodega as Bodega, cepa as Cepa, anio as Año FROM `vinos`");
        $query->execute();
        
        $wines = $query->fetchAll(PDO::FETCH_OBJ);

        return $wines;
    }

    public function getWine($wine){
        $query = $this->db->prepare("SELECT * FROM `vinos` WHERE id = ? ");
        $query->execute([$wine]);
        
        $wine = $query->fetch(PDO::FETCH_OBJ);
        
        return $wine;
    }

    public function upDateWine($nombre,$anio,$maridaje,$cepa,$stock,$precio,$caracteristica,$recomendado,$id){

        $query = $this->db->prepare("UPDATE `vinos` SET nombre = ?, anio = ?, maridaje = ?, cepa = ?,
                                                        stock = ?, precio = ?, caracteristica = ?, recomendado = ? WHERE id = ?");

        $query->execute([$nombre,$anio,$maridaje,$cepa,$stock,$precio,$caracteristica,$recomendado,$id]);
        
        return $query;
    }

    public function deleteWine($id){
        $query = $this->db->prepare("DELETE FROM `vinos` WHERE id = ?");
        $query->execute([$id]);
        
        return $query;
    }
}