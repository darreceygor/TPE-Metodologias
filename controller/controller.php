<?php
require_once 'view/portal.php';
require_once 'model/turnos.php';

class Controller {

 private $view;
 private $model;

 public function __construct()
    {
        $this->view = new View(); 
        $this->model = new Model();
    }


function showHome()   {
     
     $this->view->renderHome();  
 }

 function showLogin()   {
     
    $this->view->renderLogin();  
}

function showPaciente()   {
     
    $this->view->renderPacientes();  
}

function showTurnos()   {
    $this->view->renderTurnos();  
}


function showAbout()   {     
   $this->view->renderAbout();  
}


function showRegistros($filtro, $fecha)   {
  
    $turnos = $this->model->getTurnos($filtro, $fecha);
    $this->view->renderRegistros($turnos);  
}



function showTurnosFiltros($medico, $os)   {
  
    $turnos = $this->model->getTurnosFiltros($medico, $os);
    $this->view->renderTurnosFiltrados($turnos);  
}


function eliminar($id)  //Muestra el detalle.
{
 
   $this->model->deleteTurno($id);    
   $this->view->refreshTurnos();
}

}
