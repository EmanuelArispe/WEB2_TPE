<?php
require_once "./app/Model/model.php";
class AuthModel extends Model{

    public function getUser($email){
        $query = $this->db->prepare("SELECT * FROM `usuarios` WHERE email = ?");
        $query->execute([$email]);
        
        return $query->fetch(PDO::FETCH_OBJ);
    }
}