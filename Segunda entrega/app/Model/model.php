
<?php
require_once "./config.php";
class Model{
    protected $db;

    public function __construct(){             
      $this->db = new PDO('mysql:host='. MYSQL_HOST .';dbname='. MYSQL_DB .';charset=utf8', MYSQL_USER, MYSQL_PASS);
      $this->deploy();
    }

    private function deploy()
    {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if (count($tables) == 0) {

                $this->db->query(TABLES_STRUCTURE); 
                $this->insertAdmin();
        }
    }


    private function insertAdmin()
    {
        $pass = password_hash("admin", PASSWORD_BCRYPT);
        $email = "webadmin@gmail.com";

        $query = $this->db->prepare("INSERT INTO `usuarios` (email, password) VALUES (? , ?)");
        $query->execute([$email, $pass]);
    }
}
