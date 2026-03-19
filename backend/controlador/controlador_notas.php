<?php
require('../clase/clase_notas.php');

$obj_notas =new notas();
$obj_notas->asignar_valor();
    
switch ($_REQUEST["accion"]){
    case 'insertar':
            $obj_notas->resultado=$obj_notas->insertar();
            //$obj_notas->mensaje();

        break;
    
  
}

?>