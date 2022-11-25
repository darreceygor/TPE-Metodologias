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
    public function renderAbout()
    {
      $this->smarty->display('templates/about.tpl');
    }

    public function renderTurnos()
    {    
     $this->smarty->display('templates/turnos.tpl');
    }
    
    public function renderPacientes()
    {    
     $this->smarty->display('templates/pacientes.tpl');
    }

    public function renderRegistros($turnos)
    { 
    $this->smarty->assign('turnos', $turnos);
    $this->smarty->display('turnosFiltrados.tpl');
    }

    
    public function renderTurnosFiltrados($turnos)
    { 
    $this->smarty->assign('turnos', $turnos);
    $this->smarty->display('turnosFiltradosPorPaciente.tpl');
    }

    public function refreshTurnos()
    {
        header('Location: ' . BASE_URL . 'turnos');
    }
  

}