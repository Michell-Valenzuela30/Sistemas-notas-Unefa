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
    </style>

<body>
<?php
require('../../backend/clase/clase_estudiante.php');
$obj_estudiante=new estudiantes();
$obj_estudiante->asignar_valor();
$obj_estudiante->puntero = $obj_estudiante->mostrar_estudiante();
$estudiante=$obj_estudiante->extraer_dato();
?>	

	<h1>REGISTRAR ESTUDIANTE</h1>

	<form action="../../backend/controlador/controlador_estudiante.php" method="post">

        <label for="codigo">CODIGO:</label>
        <input type="text" id="id_estudiante" name="id_estudiante" value="<?php echo $estudiante['id_estudiante']; ?>"  >

        <label for="cedula">CEDULA:</label>
        <input type="text" id="cedula" name="cedula" value="<?php echo $estudiante['cedula']; ?>"  >

        <label for="nombre">NOMBRE:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $estudiante['nombre']; ?>"  >

        <label for="apellido">APELLIDO:</label>
        <input type="text" id="apellido" name="apellido" value="<?php echo $estudiante['apellido']; ?>" >

        <label for="email">CORREO:</label>
        <input type="text" id="email" name="email" value="<?php echo $estudiante['email']; ?>" >

        <label for="telefono">TELEFONO:</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo $estudiante['telefono']; ?>" >

        <button type="submit" value="modificar" name="accion">GUARDAR</button>
        <button type="reset">LIMPIAR</button>
	</form>
</body>
</html>

<!--
-->