<?php
require_once "./app/Model/wineModel.php";
require_once "./app/View/wineView.php";
require_once "./app/helpers/verifyHelpers.php";

class WineControlers
{
    private $model;
    private $view;


    public function __construct()
    {
        $this->model = new WineModel();
        $this->view = new WineView();
    }

    public function showHome()
    {
        $this->view->renderWineList($this->model->getWineList());
    }

    public function showWine($wine)
    {
        $this->view->RenderWine($this->model->getWine($wine));
    }

    public function showModifyWine($wine)
    {
        $this->view->renderModifyWine($this->model->getWine($wine));
    }

    public function addModify($id){
        $nombre = $_POST['nombre'];
        //$bodega = $_POST['bodega']; VER DE MOSTRAR LA LISTA DE BODEGAS
        $anio = $_POST['anio'];
        $cepa = $_POST['cepa'];
        $maridaje = $_POST['maridaje'];
        $caracteristica = $_POST['caracteristica'];
        $stock = $_POST['stock'];
        $precio = $_POST['precio'];

        // VER COMO SOLUCIONAR ESTE PROBLEMA DEL CHECKBOX

        if (empty($_POST['recomendado'])) {
            $recomendado = 0;
        } else {
            $recomendado = 1;
        }

        if (VerifyHelpers::verifyDates($_POST)) {
            $this->model->upDateWine($nombre,$anio,$maridaje,$cepa,$stock,$precio,$caracteristica,$recomendado,$id);
            $this->view->renderWineList($this->model->getWineList(),$nombre);
        } else {
            $this->view->renderModifyWine($this->model->getWine($id), true);
        }
    }

    public function showDeleteWine($id){
        $this->model->deleteWine($id);
        $this->showHome();
        
    }

    public function addWine(){
        $this->view->renderAddWine();
    }

}
