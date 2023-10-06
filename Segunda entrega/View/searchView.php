<?php
require_once "./libs/Smarty.class.php";

class SearchView {
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderSearch($listSearch){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista',"Resultado de la busqueda");
        $this->smarty->assign('bodegas',"Seleccionar Bodega");
        $this->smarty->assign('wineStore',$listSearch);
        $this->smarty->display('templates/search.tpl');
    }

}