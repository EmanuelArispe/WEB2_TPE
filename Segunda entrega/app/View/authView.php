<?php
require_once "./libs/Smarty.class.php";

class AuthView {
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderLogin($error){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloForm',"Por favor complete los datos para loggearse");
        $this->smarty->assign('error', $error);
        $this->smarty->display('login.tpl');
    }
}