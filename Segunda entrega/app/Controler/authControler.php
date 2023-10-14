<?php
require_once "./app/View/authView.php";
require_once "./app/Model/authModel.php";
require_once "./app/helpers/authHelper.php";
class AuthControler
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new AuthView();
        $this->model = new AuthModel();
    }

    public function showLogin(){
        $this->view->renderLogin(AuthHelper::getUserAdmin());
    }

    public function showLogout(){
        AuthHelper::logout();
        header('Location: ' . BASE_URL);
    }

    public function showAuth()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!VerifyHelpers::verifyData($_POST)) {
            $this->view->renderLogin(AuthHelper::getUserAdmin(),"Ingrese los datos correctos");
            return;
        }

        $user = $this->model->getUser($email);
        if ($user && password_verify($password, $user->password)) {
            AuthHelper::login($user);
            header('Location: ' . BASE_URL);
        } else {
            $this->view->renderLogin(AuthHelper::getUserAdmin(),"Usuario invalido, ingrese nuevamente sus datos");
        }
    }

}


