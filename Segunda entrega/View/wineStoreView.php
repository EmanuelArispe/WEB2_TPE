<?php
require_once "./libs/Smarty.class.php";

class WineStoreView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderWineStore($wineStore){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista',"Bodegas de vinos");
        $this->smarty->assign('products',$wineStore);
        $this->smarty->display('wineStore.tpl');
    }

}