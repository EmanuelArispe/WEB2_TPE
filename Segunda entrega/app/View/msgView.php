<?php
require_once "./libs/Smarty.class.php";
class MsgView {
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function renderError($userAdmin){
        
        $this->smarty->assign('tituloLista',"Heart Wine");
        $this->smarty->assign('userAdmin',$userAdmin);
        $this->smarty->display('error.tpl');

    }


}