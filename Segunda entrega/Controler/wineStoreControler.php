<?php
require_once "./Model/wineSotreModel.php";
require_once "./View/wineStoreView.php";

class WineStoreControler{
    private $view;
    private $model;

    public function __construct(){
        $this->view = new WineStoreView();
        $this->model = new WineStoreModel();
    }

    public function showWineStore(){
        $this->view->renderWineStore($this->model->getWineStore());
    }
}