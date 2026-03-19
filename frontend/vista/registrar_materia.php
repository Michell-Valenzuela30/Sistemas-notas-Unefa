<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR MATERIA</title>
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
require('../../backend/clase/clase_profesor.php');
$obj_profesor=new profesores();
$obj_profesor->puntero=$obj_profesor->mostrar();
 ?>

<h1>REGISTRAR MATERIA</h1>

<form action="../../backend/controlador/controlador_materia.php" method="post">

    <label for="">NOMBRE MATERIA:</label>
    <input type="text" name="nom_materia">

    <select name="fk_profesor" id="">
        <?php
        $i=0;
        while(($profesor=$obj_profesor->extraer_dato())>0)
        {
            echo "<option value='$profesor[id_profesor]'> $profesor[nombre] $profesor[apellido]  </option> ";
        }
        $i++;
         ?>

    </select>
        <button type="submit" value="insertar" name="accion"> GUARDAR</button>

</form>

</body>
</html>