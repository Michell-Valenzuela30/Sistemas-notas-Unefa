<?php

require('../clase/clase_profesor.php');

// Crear una instancia de la clase estudiantes
$obj_profesor = new profesores();
$obj_profesor->asignar_valor();

switch ($_REQUEST["accion"]) {

    case 'insertar':
        $obj_profesor->resultado=$obj_profesor->insertar();
        
        break;
    
    default:
        // code...
        break;
}


?>