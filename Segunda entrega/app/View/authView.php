<?php
require_once "./libs/Smarty.class.php";

class AuthView {
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderLogin($userAdmin,$error = null){
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('tituloForm',"Por favor complete los datos para loggearse");
        $this->smarty->assign('error', $error);
        $this->smarty->assign('userAdmin', $userAdmin);
        $this->smarty->display('login.tpl');
    }
}