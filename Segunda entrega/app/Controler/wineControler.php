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
            $this->view->renderWineList($this->model->getWineList(), AuthHelper::getUserAdmin());
    }

    public function showWine($wine)
    {
        $this->view->RenderWine($this->model->getWine($wine), AuthHelper::getUserAdmin());
    }

    public function showModifyWine($wine){
        AuthHelper::verify();      
        $this->view->renderModifyWine($this->model->getWine($wine), $this->modelCellar->getListNameCellar(),AuthHelper::getUserAdmin());
    }

    public function showAddWine(){
            AuthHelper::verify();
            $this->view->renderAddWine($this->modelCellar->getListNameCellar(),AuthHelper::getUserAdmin());
    }
    
    public function showDeleteWine($id){
        AuthHelper::verify();
        $this->model->deleteWine($id);
        $this->showHome();
        
    }

    public function newAddWine(){
        AuthHelper::verify();
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

        if(VerifyHelpers::verifyData($_POST)){

            $this->model->addWine($nombre, $bodega, $anio, $maridaje, $cepa, $stock, $precio, $caracteristica, $recomendado);
            header('Location: ' . BASE_URL);
        }else{
            $mensaje = "Por favor complete todos los campos";
            $this->view->renderAddWine($this->modelCellar->getListNameCellar(), AuthHelper::getUserAdmin(), $mensaje);
            }
    }

    public function addModify($id){
        AuthHelper::verify();
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

        if (VerifyHelpers::verifyData($_POST)) {
            $this->model->upDateWine($nombre,$bodega,$anio,$maridaje,$cepa,$stock,$precio,$caracteristica,$recomendado,$id);
            header('Location: ' . BASE_URL);
        } else {
            $mensaje = "Por favor complete todos los campos";
            $this->view->renderModifyWine($this->model->getWine($id), $this->modelCellar->getListNameCellar(), AuthHelper::getUserAdmin(), $mensaje);
        }
    }

}
