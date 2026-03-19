<?php
require_once('utilidad.php');

class materia extends utilidad
{
    public $id_materia;
    public $nom_materia;
    public $fk_profesor;

    public function insertar()
    {
        $this->consulta_bd = "INSERT INTO materia 
        (nom_materia, 
        fk_profesor) 
        VALUES 
        ('$this->nom_materia',
        '$this->fk_profesor');";

        return $this->ejecutar();
    }

   public function mostrar()
   {
    $this->consulta_bd = "SELECT id_materia, nom_materia,nombre, apellido 
     FROM materia
     join
     profesores 
     on materia.fk_profesor = profesores.id_profesor
     where 1=1";

    return $this->ejecutar();
   } 
   
    public function listar_materias()
    {
        $this->consulta_bd ="SELECT * from materia where 1=1";
        return $this->ejecutar(); 
    }
    
}

 ?>