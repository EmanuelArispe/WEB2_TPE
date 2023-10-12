<?php
require_once "./libs/Smarty.class.php";

class WineCellarView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function renderWineCellar($wineCellar, $titulo){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista',$titulo);
        $this->smarty->assign('products',$wineCellar);
        $this->smarty->display('wineCellar.tpl');
    }

    public function renderEspecifWineCellar($wineCellar){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('products',$wineCellar);
        $this->smarty->display('listWine.tpl');
    }
    public function renderModifyCellar($cellar){
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista',"Modificar ".$cellar->nombre);
        $this->smarty->assign('cellar',$cellar);
        $this->smarty->display('wineCellarModify.tpl');
    }

    public function renderAddWine() {
        $this->smarty->assign('titulo',"Blue label");
        $this->smarty->assign('tituloLista', 'Agregar nueva Bodega: ');
        $this->smarty->display('addCellar.tpl');
    }
}