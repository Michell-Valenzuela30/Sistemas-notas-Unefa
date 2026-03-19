<?php
	require('../clase/clase_estudiante.php');

	$obj_estudiante= new estudiantes();
	$obj_estudiante->asignar_valor();

		switch ($_REQUEST["accion"]) {
			case 'insertar':	
				$obj_estudiante->resultado=$obj_estudiante->insertar();
				$obj_estudiante->mensaje();
				
			break;
			
			case 'eliminar':
				$obj_estudiante->resultado=$obj_estudiante->eliminar();
				$obj_estudiante->mensaje_eliminar();

				break;

			case 'modificar':
				$obj_estudiante->resultado=$obj_estudiante->modificar();
				$obj_estudiante->mensaje_modificar();
				break;
		}

?>