<?php 

class SearchModel extends WineStoreModel{


    public function getSearch(){
        $query = $this->getDB()->prepare("SELECT * 
                                            FROM vinos 
                                            JOIN bodegas 
                                            ON vinos.bodega = bodegas.nombre");
        $query->execute();
        
        $listSearch = $query->fetchAll(PDO::FETCH_OBJ);

        return $listSearch;
    }
}