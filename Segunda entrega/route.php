<?php
require_once "./Controler/wineControler.php";
require_once "./Controler/aboutControler.php";
require_once "./Controler/wineStoreControler.php";
require_once "./Controler/searchControler.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

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
$wineStoreControler = new WineStoreControler();
$searchControler = new SearchControler();

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $wineControler->showHome();
        break;
    case 'about':
        $aboutControler->showAbout();
        break;
    case 'bodega':
        $wineStoreControler->showWineStore();
        break;
    case 'search':
        $searchControler->showSearch();
        break;
    default: 
        echo('404 Page not found'); 
        break;

}


?>