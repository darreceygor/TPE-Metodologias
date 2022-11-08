<?php
require_once 'view/portal.php';


class Controller {

 private $view;
 private $model;

 public function __construct()
    {
        $this->view = new View(); 
        // $this->model = new Model();
    }


function showHome()   {
     
     $this->view->renderHome();  
 }

 function showLogin()   {
     
    $this->view->renderLogin();  
}

function showPaciente()   {
     
    $this->view->renderHome();  
}

function showTurnos()   {
    $this->view->renderTurnos();  
}


function showAbout()   {     
   $this->view->renderAbout();  
}

function showRegistros($filtro)   {
 
    $turnos = $this->model->getTurnos();
    $this->view->renderRegistros($turnos, $filtro);  
}


function eliminar($id)  //Muestra el detalle.
{
 //var_dump($idTurno);
 
   $this->model->deleteTurno($id);    
   $this->view->refreshTurnos();
}

}
