<?php 
require_once('utilidad.php');

class estudiantes extends utilidad
{
	public $id_estudiante;
	public $cedula;
	public $nombre;
	public $apellido;
	public $email;
	public $telefono;

	public function insertar()
	{
		$this->consulta_bd="INSERT INTO estudiantes
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
			    '$this->telefono');";

		return $this->ejecutar();
	}

	public function mostrar()
	{
		$this->consulta_bd="SELECT * FROM estudiantes where 1=1";
		return $this->ejecutar();
	}

	public function eliminar()
	{
		$this->consulta_bd="DELETE FROM estudiantes WHERE id_estudiante = '$this->id_estudiante';";
		return $this->ejecutar();
		
	}
	
	public function mostrar_estudiante()
	{
		$this->consulta_bd="SELECT * FROM estudiantes where id_estudiante= '$this->id_estudiante';";
		return $this->ejecutar();
	}

	public function modificar(){
		$this->consulta_bd="UPDATE estudiantes 
		SET
		cedula = '$this->cedula',
		nombre = '$this->nombre',
		apellido = '$this->apellido',
		email = '$this->email',
		telefono = '$this->telefono' 
		WHERE id_estudiante = '$this->id_estudiante';";

		return $this->ejecutar();
	}
}

 ?>