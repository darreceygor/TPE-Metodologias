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


    function showRegistros($filtro)   {
    
        $turnos = $this->model->getTurnos($filtro);
        $this->view->renderRegistros($turnos);  
    }


    function eliminar($id)  //Muestra el detalle.
    {
    //var_dump($idTurno);
    
    $this->model->deleteTurno($id);    
    $this->view->refreshTurnos();
    }
}