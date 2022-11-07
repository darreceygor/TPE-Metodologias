<?php

class Model
{

    private $db_turnos;

    public function __construct()
    {
        $this->db_turnos = new PDO('mysql:host=localhost;' . 'dbname=db_turnofacil;charset=utf8', 'root', '');
    }
}