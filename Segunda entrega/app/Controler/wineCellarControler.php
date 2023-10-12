<?php
require_once "./app/Model/wineCellarModel.php";
require_once "./app/View/wineCellarView.php";
require_once "./app/helpers/verifyHelpers.php";

class WineCellarControler
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new WineCellarView();
        $this->model = new WineCellarModel();
    }

    public function showWineCellar()
    {
        $this->view->renderWineCellar($this->model->getWineCellar(), "Bodegas de vinos");
    }

    public function showEspecificCellar($cellar)
    {
        $this->view->renderEspecifWineCellar($this->model->getEspecificCellar($cellar));
    }

    public function showModifyCellar($cellar)
    {
        $this->view->renderModifyCellar($this->model->getCellar($cellar));
    }

    public function showAddCellar()
    {
        $this->view->renderAddWine();
    }

    public function listNameCellar()
    {
        return $this->model->getListNameCellar();
    }

    public function addModifyCellar($idCellar)
    {
        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $provincia = $_POST['provincia'];
        $descripcion = $_POST['descripcion'];
        if (VerifyHelpers::verifyDates($_POST)) {
            $this->model->upDateCellar($nombre,$pais, $provincia, $descripcion, $idCellar);
            header('Location: ' . BASE_URL .'cellar');
        } else {
            $this->showWineCellar();
        }
    }

    public function showDeleteCellar($cellar)
    {
        if (empty($this->model->getEspecificCellar($cellar))) {
            $this->model->deleteCellar($cellar);
            header('Location: ' . BASE_URL .'cellar');
        } else {
            // Mostrar error de que faltan datos
            $this->showWineCellar();
        }
    }

    public function newAddCellar()
    {

        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $provincia = $_POST['provincia'];
        $descripcion = $_POST['descripcion'];

        if (VerifyHelpers::verifyDates($_POST)) {
            // VERIFICAR QUE NO ESTE CARGADA
            $this->model->addCellar($nombre,$pais,$provincia,$descripcion);
            header('Location: ' . BASE_URL .'cellar');
        } else {
            // Mostrar error de que faltan datos
            $this->showAddCellar();
        }
    }
}
