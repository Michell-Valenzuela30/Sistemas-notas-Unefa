<?php
require_once ('utilidad.php');

class notas extends utilidad
{
    public $id_notas;
    public $fk_estudiante;
    public $fk_materia;
    public $primer_corte;
    public $segundo_corte;
    public $tercer_corte;
    public $cuarto_corte;

    public function insertar(){
        $this->consulta_bd ="INSERT INTO notas(
        fk_estudiante,
        fk_materia,
        primer_corte,
        segundo_corte,
        tercer_corte,
        cuarto_corte
        )
        VALUES
        ('$this->id_notas',
         '$this->fk_estudiante',
         '$this->fk_materia',
         '$this->primer_corte',
         '$this->segundo_corte',
         '$this->tercer_corte',
         '$this->cuarto_corte');";

         return $this->ejecutar();
    }
    
    public function mostrar_notas(){
        $this->consulta_bd="SELECT
        id_notas,
        cedula,
        nombre,
        apellido,
        nom_materia,
        primer_corte,
        segundo_corte,
        tercer_corte,
        cuarto_corte,
        nota_final
        FROM notas 
        JOIN estudiantes ON notas.fk_estudiante=estudiantes.id_estudiante
        JOIN materia ON notas.fk_materia=materia.id_materia WHERE 1=1";

        return $this->ejecutar();
        
    }

}



?>