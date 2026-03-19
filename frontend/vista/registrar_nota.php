<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>FORMULARIO ESTUDIANTE</title>
	<link rel="stylesheet" href="../estilos/formulario_estudiante.css">
</head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333333; /* Gris oscuro de la UNEFA */
            margin-bottom: 20px;
            font-size: 2rem;
            text-transform: uppercase;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            border: 2px solid #4CAF50; /* Verde militar de la UNEFA */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333333; /* Gris oscuro de la UNEFA */
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #4CAF50; /* Verde militar de la UNEFA */
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #45a049; /* Verde más oscuro para el enfoque */
            outline: none;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5); /* Sombra verde */
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }

        button[type="submit"] {
            background-color: #4CAF50; /* Verde militar de la UNEFA */
            color: white;
        }

        button[type="submit"]:hover {
            background-color: #45a049; /* Verde más oscuro al pasar el mouse */
        }

        button[type="reset"] {
            background-color: #333333; /* Gris oscuro de la UNEFA */
            color: white;
        }

        button[type="reset"]:hover {
            background-color: #555555; /* Gris más claro al pasar el mouse */
        }
        select{
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #4CAF50; /* Verde militar de la UNEFA */
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
    </style>

<body>
<?php
require('../../backend/clase/clase_estudiante.php');
$obj_estudiante=new estudiantes();
$obj_estudiante->asignar_valor();
$obj_estudiante->puntero = $obj_estudiante->mostrar_estudiante();
$estudiante=$obj_estudiante->extraer_dato();

require('../../backend/clase/clase_materia.php');
$obj_materia=new materia();
$obj_materia->puntero=$obj_materia->listar_materias();

?>	

	<h1>REGISTRAR ESTUDIANTE</h1>

	<form action="../../backend/controlador/" method="post">  <!-- NO SE HA COMPLETADO EL FORMULARIO ¡NO GUARDA! -->

        <label for="codigo">CODIGO:</label>
        <input type="text" id="" name="" value="CODIGO XD"  >

        <label for="nombre">NOMBRE:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $estudiante['nombre']; ?>"  >

        <label for="apellido">APELLIDO:</label>
        <input type="text" id="apellido" name="apellido" value="<?php echo $estudiante['apellido']; ?>"  >

        <!-- SELECT PARA ELEGIR LA MATERIA -->
        <label for="materia">MATERIA:</label>
        <select name="fk_materia" >
        <?php
        $i=0;
        while (($materia=$obj_materia->extraer_dato())>0)
            {
                echo "<option value='$materia[id_materia]'> $materia[nom_materia]</option> ";
            }
            $i++;
        ?>
        </select>

<!-- ------------- GRUPO PARA ASIGNAR LAS NOTAS --------------------------------- -->
        <label for="">PRIMER CORTE:</label>
        <input type="text" id="" name="primer_corte" value="" placeholder="25% de la Nota" >

        <label for="">SEGUNDO CORTE:</label>
        <input type="text" id="" name="segundo_corte" value="" placeholder="25% de la Nota" >

        <label for="">TERCER CORTE:</label>
        <input type="text" id="" name="tercer_corte" value="" placeholder="25% de la Nota" >

        <label for="">CUARTO CORTE:</label>
        <input type="text" id="" name="cuarto_corte" value="" placeholder="25% de la Nota" >
<!-- ----------------------------------------------------------------------------- -->

        <button type="submit" value="" name="accion">GUARDAR</button>
        <button type="reset">LIMPIAR</button>
	</form>
</body>
</html>

<!-- -->