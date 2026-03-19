<?php 
require_once('utilidad.php');

class profesores extends utilidad
{
    public $id_profesor;
    public $cedula;
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;

    public function insertar()
    {
        $this->consulta_bd = "INSERT INTO profesores
        (cedula,
         nombre,
         apellido, 
         email, 
         telefono) 
         VALUES(
            '$this->cedula',
            '$this->nombre',
            '$this->apellido',
            '$this->email',
            '$this->telefono')";
            return $this->ejecutar();
    }

    public function mostrar()
    {
        $this->consulta_bd = "SELECT * FROM profesores WHERE 1=1";
        return $this->ejecutar();
    }
 }   

 ?>