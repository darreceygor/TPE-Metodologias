<?php

class Model
{

    private $db_turnos;

    public function __construct()
    {
        $this->db_turnos = new PDO('mysql:host=localhost;' . 'dbname=db_turnofacil;charset=utf8', 'root', '');
    }
    
    function deleteTurno($id)
    {
        $query = $this->db_turnos->prepare('DELETE FROM turnos WHERE id_turno= ?');
        $query->execute([$id]);
    }

    function getTurnos($medico)
    {
        $query = $this->db_turnos->prepare('SELECT * FROM turnos WHERE medico=?');
        $query->execute([$medico]);
        $turnos= $query->fetchAll(PDO::FETCH_OBJ);
        return $turnos;
    }
}