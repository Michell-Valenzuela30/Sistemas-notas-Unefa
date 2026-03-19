<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR PROFESORES - UNEFA</title>
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
            max-width: 800px;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
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
    require('../../backend/clase/clase_profesor.php');
    $obj_profesor = new profesores();

    $obj_profesor->puntero = $obj_profesor->mostrar();
    ?>
    <h1>DATOS DE LOS PROFESORES - UNEFA</h1>

    <table>
        <tr>
			<th>COD:</th>
			<th>CEDULA:</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
            <th>ACCIONES</th> <!-- Nueva columna para los botones -->
        </tr>
        <?php
        $i = 0;
        while (($profesor = $obj_profesor->extraer_dato()) > 0) {
            echo "<tr>
			        <td>$profesor[id_profesor]</td>
					<td>$profesor[cedula]</td>
                    <td>$profesor[nombre]</td>
                    <td>$profesor[apellido]</td>
                    <td>$profesor[email]</td>
                    <td>$profesor[telefono]</td>
                    <td class='acciones'>
                        <!-- Botón EDITAR -->
                        <button class='btn-editar' onclick='editarProfesor($profesor[id_profesor])'>EDITAR</button>
                        <!-- Botón ELIMINAR -->
                        <button class='btn-eliminar' onclick='eliminarProfesor($profesor[id_profesor])'>ELIMINAR</button>
                    </td>
                  </tr>";
            $i++;
        } // fin bucle while
        ?>
    </table>

    <script>
        // Función para editar un estudiante
        function editarEstudiante(id_profesor) {
            alert('Editar ID: ' + id_profesor);
            // Aquí puedes redirigir a una página de edición o abrir un modal
             window.location.href = 'modificar.php?id_profesor=' + id_profesor;
        }

        // Función para eliminar un estudiante
        function eliminarEstudiante(id_profesor) {
            if (confirm('¿Estás seguro de eliminar?')) {
                alert('Eliminar  ID: ' + id_profesor);
                //redirigir a un script de eliminación
                 window.location.href = '../../backend/controlador/controlador_profesor.php?accion=eliminar&id_profesor=' + id_profesor;
            }
        }
    </script>
</body>
</html>