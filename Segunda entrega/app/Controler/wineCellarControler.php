<?php
require_once "./app/Model/wineCellarModel.php";
require_once "./app/View/wineCellarView.php";
require_once "./app/helpers/verifyHelpers.php";
require_once "./app/helpers/authHelper.php";

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
        $this->view->renderWineCellar($this->model->getWineCellar(), "Bodegas de vinos", AuthHelper::getUserAdmin());
    }

    public function showEspecificCellar($cellar)
    {
        $this->view->renderEspecifWineCellar($this->model->getEspecificCellar($cellar), $this->model->getCellar($cellar), AuthHelper::getUserAdmin());
    }

    public function showModifyCellar($cellar)
    {
        AuthHelper::verify();
        $this->view->renderModifyCellar($this->model->getCellar($cellar), AuthHelper::getUserAdmin());
    }

    public function showAddCellar()
    {
        AuthHelper::verify();
        $this->view->renderAddCellar(AuthHelper::getUserAdmin());
    }

    public function listNameCellar()
    {
        return $this->model->getListNameCellar();
    }

    public function addModifyCellar($idCellar)
    {
        AuthHelper::verify();
        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $provincia = $_POST['provincia'];
        $descripcion = $_POST['descripcion'];
        if (VerifyHelpers::verifyData($_POST)) {
            $this->model->upDateCellar($nombre,$pais, $provincia, $descripcion, $idCellar);
            header('Location: ' . BASE_URL .'cellar');
        } else {
            $mensaje = "Por favor complete todos los campos";
            $this->view->renderModifyCellar($this->model->getCellar($idCellar), AuthHelper::getUserAdmin(),$mensaje);

        }
    }

    public function showDeleteCellar($cellar)
    {
        AuthHelper::verify();
        if (empty($this->model->getEspecificCellar($cellar))) {
            $this->model->deleteCellar($cellar);
            header('Location: ' . BASE_URL .'cellar');
        } else {
            $this->view->errorDelete(AuthHelper::getUserAdmin());
        }
    }

    public function newAddCellar()
    {
        AuthHelper::verify();
        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $provincia = $_POST['provincia'];
        $descripcion = $_POST['descripcion'];

        if (VerifyHelpers::verifyData($_POST)) {
            $this->model->addCellar($nombre,$pais,$provincia,$descripcion);
            header('Location: ' . BASE_URL .'cellar');
        } else {
            $mensaje = "Por favor complete todos los campos";
            $this->view->renderAddCellar(AuthHelper::getUserAdmin(),$mensaje);

        }
    }
}
