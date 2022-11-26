<?php

class Model
{

    private $db_turnos;

    public function __construct()
    {
        $this->db_turnos = new PDO('mysql:host=localhost;' . 'dbname=db_turnofacil;charset=utf8', 'root', '');
    }
    
    function getTurnos($medico, $fecha)
    {
        $query = $this->db_turnos->prepare('SELECT * FROM turnos WHERE medico=? AND fecha=?');
        $query->execute([$medico, $fecha]);
        $turnos= $query->fetchAll(PDO::FETCH_OBJ);
        return $turnos;
    }
    
    function getTurnosFiltros($medico, $os)
    {
        $query = $this->db_turnos->prepare('SELECT * FROM medicos WHERE apellido=? AND obra_social=?');
        $query->execute([$medico, $os]);
        $turnos= $query->fetchAll(PDO::FETCH_OBJ);
        return $turnos;
    }

    function deleteTurno($id)
    {
        $query = $this->db_turnos->prepare('DELETE FROM turnos WHERE id_turno= ?');
        $query->execute([$id]);
    }
}