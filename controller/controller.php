<?php
require_once 'view/portal.php';


class Controller {

 private $view;


 public function __construct()
    {
        $this->view = new View(); 
        
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
