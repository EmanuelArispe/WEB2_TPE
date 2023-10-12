<?php
require_once "./app/Controler/wineControler.php";
require_once "./app/Controler/aboutControler.php";
require_once "./app/Controler/wineCellarControler.php";
require_once "./app/Controler/authControler.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);


// inicializo el controlador

$wineControler = new WineControlers();
$aboutControler = new AboutControler();
$wineCellarControler = new WineCellarControler();
$authControler = new AuthControler();

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $wineControler->showHome();
        break;
    case 'about':
        $aboutControler->showAbout();
        break;
    case 'cellar':
        $wineCellarControler->showWineCellar();
        break;
    case 'search':
        $wineCellarControler->showEspecificCellar($params[1]);
        break;
    case 'wine':
        $wineControler->showWine($params[1]);
        break;
    case 'login':
        $authControler->showLogin();
        break;
    case 'loginAuth':
        $authControler->showAuth();
        break;
    case 'deleteWine':
        $wineControler->showDeleteWine($params[1]);
        break;
    case 'modifyWine':
        $wineControler->showModifyWine($params[1]);
        break;
    case 'addModify':
        $wineControler->addModify($params[1]);
        break;
    case 'deleteCellar':
        $wineCellarControler->showDeleteCellar($params[1]);
        break;
    case 'modifyCellar':
        $wineCellarControler->showModifyCellar($params[1]);
        break;
    case 'addModifyCellar':
        $wineCellarControler->addModifyCellar($params[1]);
        break;
    case 'addWine':
        $wineControler->showAddWine();
        break;
    case 'newAddWine':
            $wineControler->newAddWine();
            break;
    case 'addCellar':
        $wineCellarControler->showAddCellar();
        break;
    case 'newAddCellar':
        $wineCellarControler->newAddCellar();
        break;
    case 'logout':
        $authControler->showLogout();
        break;
    default:
        echo ('404 Page not found');
        break;
}
