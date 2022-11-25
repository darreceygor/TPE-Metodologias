<?php
require_once "controller/controller.php";
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$Controller = new Controller();


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        $Controller->showHome(); 
        break;
    case 'login': 
        $Controller->showLogin(); 
        break;
    case 'pacientes': 
        $Controller->showPaciente(); 
        break;
    case 'turnos':
        $Controller->showTurnos();
        break;
    case 'buscar':
        $Controller->showRegistros($params[1], $params[2]);
        break;
    case 'buscarDisponibles':
    $Controller->showTurnosFiltros($params[1], $params[2]);
    break;
    case 'borrar':
        $Controller->eliminar($params[1]);
        break;
    case 'about':
        $Controller->showAbout();
        break; 
    default:
        $Controller->showHome();  //Por defecto va al Home.
        break;
}