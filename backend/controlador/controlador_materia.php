<?php
	require('../clase/clase_materia.php');

	$obj_materia= new materia();
	$obj_materia->asignar_valor();

		switch ($_REQUEST["accion"]) {
			case 'insertar':	
				$obj_materia->resultado=$obj_materia->insertar();
				$obj_materia->mensaje();
				
			break;
			
			case 'eliminar':
				$obj_materia->resultado=$obj_estudiante->eliminar();
				//$obj_materia->mensaje_eliminar();

				break;

			case 'modificar':
				$obj_materia->resultado=$obj_materia->modificar();
				//$obj_materia->mensaje_modificar();
				break;
		}
?>