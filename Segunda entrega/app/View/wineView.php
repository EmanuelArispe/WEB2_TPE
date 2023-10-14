<?php 
require_once "./libs/Smarty.class.php";

class  WineView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderWineList($wines, $userAdmin, $upData = null){
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('tituloLista',"Listado de Vinos");
        $this->smarty->assign('products', $wines);
        $this->smarty->assign('updata', $upData);
        $this->smarty->assign('userAdmin', $userAdmin);
        $this->smarty->display('templates/home.tpl');
    }

    public function renderWine($wine,$userAdmin){
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('tituloLista',"Vino: ".$wine->nombre);
        $this->smarty->assign('product', $wine);
        $this->smarty->assign('userAdmin', $userAdmin);
        $this->smarty->display('./templatesWine/wineView.tpl');
    }

    public function renderModifyWine($wine, $cellarList, $userAdmin, $error = null){
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('tituloLista',"Vino a modificar: ".$wine->nombre);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('product', $wine);
        $this->smarty->assign('listCellar', $cellarList);
        $this->smarty->assign('userAdmin', $userAdmin);
        $this->smarty->display('./templatesWine/wineModify.tpl');
    }

    public function renderAddWine($cellarList, $userAdmin , $error = null){
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('tituloLista','Agregar nuevo vino: ');
        $this->smarty->assign('error',$error);
        $this->smarty->assign('listCellar', $cellarList);
        $this->smarty->assign('userAdmin', $userAdmin);
        $this->smarty->display('./templatesWine/addwine.tpl');
    }
}


