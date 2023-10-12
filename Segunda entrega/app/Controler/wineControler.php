<?php
require_once "./app/Model/wineModel.php";
require_once "./app/View/wineView.php";
require_once "./app/helpers/verifyHelpers.php";
require_once "./app/Model/wineCellarModel.php";

class WineControlers
{
    private $model;
    private $modelCellar;
    private $view;


    public function __construct()
    {
        $this->model = new WineModel();
        $this->view = new WineView();
        $this->modelCellar = new WineCellarModel();
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
        $this->view->renderModifyWine($this->model->getWine($wine), $this->modelCellar->getListNameCellar());
    }

    public function showAddWine(){

            $this->view->renderAddWine($this->modelCellar->getListNameCellar());
    }
    
    public function showDeleteWine($id){
        $this->model->deleteWine($id);
        $this->showHome();
        
    }

    public function newAddWine(){
        $nombre = $_POST['nombre'];
        $bodega = $_POST['bodega'];
        $anio = $_POST['anio'];
        $cepa = $_POST['cepa'];
        $maridaje = $_POST['maridaje'];
        $caracteristica = $_POST['caracteristica'];
        $stock = $_POST['stock'];
        $precio = $_POST['precio'];

        if (empty($_POST['recomendado'])) {
            $recomendado = 0;
        } else {
            $recomendado = 1;
        }

        if(VerifyHelpers::verifyDates($_POST)){
            // VERIFICAR QUE NO ESTE CARGADO
            $this->model->addWine($nombre, $bodega, $anio, $maridaje, $cepa, $stock, $precio, $caracteristica, $recomendado);
            header('Location: ' . BASE_URL);
        }else{
           // HACER LA VISTA
            }
    }

    public function addModify($id){
        $nombre = $_POST['nombre'];
        $bodega = $_POST['bodega'];
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
            $this->model->upDateWine($nombre,$bodega,$anio,$maridaje,$cepa,$stock,$precio,$caracteristica,$recomendado,$id);
            header('Location: ' . BASE_URL);
        } else {
            // HACER LA VISTA
            $this->view->renderModifyWine($this->model->getWine($id), true);
        }
    }

}
