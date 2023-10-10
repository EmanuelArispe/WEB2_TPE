<?php
require_once "./app/Model/wineCellarModel.php";
require_once "./app/View/wineCellarView.php";
require_once "./app/helpers/verifyHelpers.php";

class WineCellarControler{
    private $view;
    private $model;

    public function __construct(){
        $this->view = new WineCellarView();
        $this->model = new WineCellarModel();
    }

    public function showWineCellar(){
        $this->view->renderWineCellar($this->model->getWineCellar(),"Bodegas de vinos", $button = false);
    }

    public function showEspecificCellar($cellar){
        $this->view->renderWineCellar($this->model->getEspecificCellar($cellar),"Bodega: ".$cellar, $button =true);
    }

    public function showModifyCellar($cellar){
       $this->view->renderModifyCellar($this->model->getCellar($cellar));
    }

    public function listNameCellar(){
        return $this->model->getListNameCellar();
    }

    public function addModifyCellar($idCellar){
        $pais = $_POST['pais'];
        $provincia = $_POST['provincia'];
        $descripcion = $_POST['descripcion'];
       if(VerifyHelpers::verifyDates($_POST)){
            $this->model->upDateCellar($pais,$provincia,$descripcion,$idCellar);
            $this->showWineCellar();
       }
       else{
        $this->showWineCellar();
       }
    }

    public function showDeleteCellar($cellar){
        if(empty($this->model->getEspecificCellar($cellar))){
            $this->model->deleteCellar($cellar);
            $this->showWineCellar();
        }else{
            $this->showWineCellar();
        }
    }


}