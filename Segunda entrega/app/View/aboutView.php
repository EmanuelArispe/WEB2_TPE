<?php
require_once "./libs/Smarty.class.php";
    class AboutView {
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }

        public function renderAbout(){
            $this->smarty->assign('titulo',"Blue label");
            $this->smarty->display('templates/about.tpl');
        }
    }