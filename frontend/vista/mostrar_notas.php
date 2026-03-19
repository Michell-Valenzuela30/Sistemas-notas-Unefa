<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR NOTAS - UNEFA</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: #333333; /* Gris oscuro de la UNEFA */
            margin-bottom: 20px;
            font-size: 2rem;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            max-width: auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
          
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #dddddd;
        }

        th {
            background-color: #4CAF50; /* Verde militar de la UNEFA */
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Fondo gris claro para filas pares */
        }

        tr:hover {
            background-color: #f1f1f1; /* Efecto hover para filas */
        }

        td {
            color: #333333; /* Gris oscuro de la UNEFA */
        }

        .acciones {
            display: flex;
            gap: 10px; /* Espacio entre los botones */
        }

        .btn-editar, .btn-eliminar {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .btn-editar {
            background-color: #2196F3; /* Azul para el botón EDITAR */
            color: white;
        }

        .btn-editar:hover {
            background-color: #1976D2; /* Azul más oscuro al pasar el mouse */
        }

        .btn-eliminar {
            background-color: #f44336; /* Rojo para el botón ELIMINAR */
            color: white;
        }

        .btn-eliminar:hover {
            background-color: #d32f2f; /* Rojo más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>

    <?php
    require('../../backend/clase/clase_notas.php');
    $obj_notas = new notas();

    $obj_notas->puntero = $obj_notas->mostrar_notas();
    ?>
    <h1>NOTAS DE LOS ESTUDIANTES - UNEFA</h1>

    <table>
        <tr>
			<th>COD:</th>
			<th>CEDULA:</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>MATERIA</th>
            <th>PRIMER CORTE:</th>
            <th>SEGUNDO CORTE:</th>
            <th>TERCER CORTE:</th>
            <th>CUARTO CORTE:</th>
            <th>NOTA FINAL</th>
        </tr>
        <?php
        $i = 0;
        while (($notas = $obj_notas->extraer_dato()) > 0) {
            echo "<tr>
			        <td>$notas[id_notas]</td>
					<td>$notas[cedula]</td>
                    <td>$notas[nombre]</td>
                    <td>$notas[apellido]</td>
                    <td>$notas[nom_materia]</td>
                    <td>$notas[primer_corte]</td>
                    <td>$notas[segundo_corte]</td>
                    <td>$notas[tercer_corte]</td>
                    <td>$notas[cuarto_corte]</td>
                    <td>$notas[nota_final]</td>
                  </tr>";
            $i++;
        } // fin bucle while
        ?>
    </table>

</body>
</html>