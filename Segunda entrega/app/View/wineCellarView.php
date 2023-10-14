<?php
require_once "./libs/Smarty.class.php";

class WineCellarView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderWineCellar($wineCellar, $titulo,$userAdmin){
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('tituloLista',$titulo);
        $this->smarty->assign('products',$wineCellar);
        $this->smarty->assign('userAdmin',$userAdmin);
        $this->smarty->display('./templatesCellar/wineCellar.tpl');
    }

    public function renderEspecifWineCellar($wineCellar,$cellar, $userAdmin){
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('products',$wineCellar);
        $this->smarty->assign('cellar',$cellar);
        $this->smarty->assign('userAdmin',$userAdmin);
        $this->smarty->display('./templatesCellar/listWine.tpl');
    }
    public function renderModifyCellar($cellar,$userAdmin){
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('tituloLista',"Modificar ".$cellar->nombre);
        $this->smarty->assign('cellar',$cellar);
        $this->smarty->assign('userAdmin',$userAdmin);
        $this->smarty->display('./templatesCellar/wineCellarModify.tpl');
    }

    public function renderAddCellar($userAdmin) {
        $this->smarty->assign('titulo',"Heart Wine");
        $this->smarty->assign('tituloLista', 'Agregar nueva Bodega: ');
        $this->smarty->assign('userAdmin',$userAdmin);
        $this->smarty->display('./templatesCellar/addCellar.tpl');
    }
}