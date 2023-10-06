<?php
require_once "./Model/searchModel.php";
require_once "./View/searchView.php";

class SearchControler {
    private $view;
    private $model;

    public function __construct(){
        $this->view = new SearchView();
        $this->model = new SearchModel();
    }

    public function showSearch(){
        $this->view->renderSearch($this->model->getWineStore());
    }
}