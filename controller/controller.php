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
     
    $this->view->renderHome();  
}

}
