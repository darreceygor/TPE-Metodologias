<?php

class Model
{

    private $db_turnos;

    public function __construct()
    {
        $this->db_turnos = new PDO('mysql:host=localhost;' . 'dbname=db_turnofacil;charset=utf8', 'root', '');
    }
    
    function getTurnos()
    {
        $query = $this->db_turnos->prepare('SELECT * FROM turnos');
        $query->execute();
        $turnos= $query->fetchAll(PDO::FETCH_OBJ);
        return $turnos;
    }
}