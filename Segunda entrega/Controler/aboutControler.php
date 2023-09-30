<?php
require_once "./View/aboutView.php";

class AboutControler {
    private $view;

    public function __construct(){
        $this->view = new AboutView();
    }

    public function showAbout(){
        $this->view->renderAbout();
    }
}