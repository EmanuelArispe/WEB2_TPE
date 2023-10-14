<?php
require_once "./app/View/msgView.php";

 class MsgControler{
    private $view;

    public function __construct(){
        $this->view = new MsgView();
    }

    public function error(){
        $this->view->renderError(AuthHelper::getUserAdmin());
    }
 }