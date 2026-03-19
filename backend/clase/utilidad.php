<?php

	class utilidad
	{
		private $nombre_servidor; // nombre del servidor (LOCALHOST)
		private $usuario_servidor; // nombre de usuario en el sevidor (root)
		private $clave_servidor; // clave de usuario para entrar el servidor
		private $nombre_bd; // el nombre de la base de datos
		private $conexion_bd; // variable de conexion a la base de datos
		public $consulta_bd; // la ejecucion de las consultas sql en la base de datos
		public $resultado; //
		public $puntero; //

			function __construct()
			{
				$this->nombre_servidor="localhost";
				$this->usuario_servidor="root";
				$this->clave_servidor="";
				$this->nombre_bd="sist_notas";
				$this->conectar();
			}

			// inicio funcion
			public function conectar()
			{
				$this->conexion_bd=new mysqli($this->nombre_servidor,$this->usuario_servidor,$this->clave_servidor,$this->nombre_bd);
			}// fin funcion conectar

			public function ejecutar()
			{
		echo $this->consulta_bd; 
				return $this->conexion_bd->query($this->consulta_bd);
			}
			/*
					

			*/	
			public function asignar_valor()
			{
				foreach ($_REQUEST as $atributo => $valor) 
				{
					$this->$atributo=$valor;				
				}
			}
// MENSAJE AL REGISTRAR UN ESTUDIANTE
			public function mensaje()
			{
				if($this->resultado == true){
					echo "<script languaje='javascript'>
							alert('REGISTRO EXITOSO!');
							document.location='../../index.html';
							</script>";
				}
				 else{
				 	echo "<script languaje='javascript'>
							alert('ERROR DE REGISTRO');
							document.location='../../frontend/vista/registrar_estudiante.html';
							</script>";
				 }
			}// FIN MENSAJE

			public function extraer_dato(){
				return $this->puntero->fetch_assoc(); // funcion de php para recorrer las tablas en la base de datos
			}
			
			public function mensaje_eliminar()
			{
				if($this->resultado == true){
					echo "<script languaje='javascript'>
							alert('REGISTRO ELIMINADO');
							document.location='../../frontend/vista/mostrar_estudiantes.php';
							</script>";
				}
				 else{
				 	echo "<script languaje='javascript'>
							alert('ERROR');
							document.location='../../frontend/vista/mostrar_estudiantes.php';
							</script>";
				 }
			}

			public function mensaje_modificar()
			{
				if($this->resultado == true){
					echo "<script languaje='javascript'>
							alert('REGISTRO ACTUALIZADO');
							document.location='../../frontend/vista/mostrar_estudiantes.php';
							</script>";
				}
				 else{
				 	echo "<script languaje='javascript'>
							alert('ERROR');
							document.location='../../frontend/vista/mostrar_estudiantes.php';
							</script>";
				 }
			}
	}// fin clase utilidad
?>