<?php

require_once 'smarty/libs/Smarty.class.php';


class View
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function renderHome()
    {
      $this->smarty->display('templates/home.tpl');
    }

    public function renderLogin()
    {
      $this->smarty->display('templates/login.tpl');
     
    }

    public function renderTurnos()
    {    
     $this->smarty->display('templates/turnos.tpl');
    }
  

}