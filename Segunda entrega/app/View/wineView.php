<?php 
require_once "./libs/Smarty.class.php";

class  WineView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderWineList($wines, $update = null){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista',"Listado de Vinos");
        $this->smarty->assign('products', $wines);
        $this->smarty->assign('update', $update);
        $this->smarty->display('templates/home.tpl');
    }

    public function renderWine($wine){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista',"Vino: ".$wine->nombre);
        $this->smarty->assign('product', $wine);
        $this->smarty->display('templates/wineView.tpl');
    }

    public function renderModifyWine($wine, $cellarList, $error = null){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista',"Vino a modificar: ".$wine->nombre);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('product', $wine);
        $this->smarty->assign('listCellar', $cellarList);
        $this->smarty->display('templates/wineModify.tpl');
    }

    public function renderAddWine($cellarList){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista','Agregar nuevo vino: ');
        $this->smarty->assign('listCellar', $cellarList);
        $this->smarty->display('addwine.tpl');
    }
}


