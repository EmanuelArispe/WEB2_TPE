<?php 
require_once "./libs/Smarty.class.php";

class  WineView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderWine($wines){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista',"Listado de Vinos");
        $this->smarty->assign('products', $wines);
        $this->smarty->display('templates/home.tpl');
    }
}



