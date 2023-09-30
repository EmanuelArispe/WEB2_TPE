<?php 
    require_once "./Model/wineModel.php";
    require_once "./View/wineView.php";

    class WineControlers {
        private $model;
        private $view;

    
        public function __construct(){
            $this->model = new WineModel();
            $this->view = new WineView();
        }

        public function showHome(){
            $this->view->renderWine($this->model->getWine());
        }

}