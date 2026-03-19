<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR ESTUDIANTES - UNEFA</title>
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

       .btn-notas, .btn-editar, .btn-eliminar {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.8s ease;
        }

        .btn-notas {
            background-color:rgb(33, 150, 243); /* Azul para el botón EDITAR */
            color: white;
        }

        .btn-notas:hover {
            background-color:rgb(25, 118, 210); /* Azul más oscuro al pasar el mouse */
        }

        .btn-editar {
            background-color:rgb(33, 150, 243); /* Azul para el botón EDITAR */
            color: white;
        }

        .btn-editar:hover {
            background-color:rgb(25, 118, 210); /* Azul más oscuro al pasar el mouse */
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
    require('../../backend/clase/clase_estudiante.php');
    $obj_estudiantes = new estudiantes();

    $obj_estudiantes->puntero = $obj_estudiantes->mostrar();
    ?>
    <h1>DATOS DE LOS ESTUDIANTES - UNEFA</h1>

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
        while (($estudiante = $obj_estudiantes->extraer_dato()) > 0) {
            echo "<tr>
			        <td>$estudiante[id_estudiante]</td>
					<td>$estudiante[cedula]</td>
                    <td>$estudiante[nombre]</td>
                    <td>$estudiante[apellido]</td>
                    <td>$estudiante[email]</td>
                    <td>$estudiante[telefono]</td>
                    <td class='acciones'>
                        <!-- Botón Agregar Nota -->
                        <button class='btn-notas' onclick='notaEstudiante($estudiante[id_estudiante])'>AGREGAR NOTAS</button>
                        <!-- Botón EDITAR -->
                        <button class='btn-editar' onclick='editarEstudiante($estudiante[id_estudiante])'>EDITAR</button>
                        <!-- Botón ELIMINAR -->
                        <button class='btn-eliminar' onclick='eliminarEstudiante($estudiante[id_estudiante])'>ELIMINAR</button>
                    </td>
                  </tr>";
            $i++;
        } // fin bucle while
        ?>
    </table>

    <script>
       // Función para Agregar notas
       function notaEstudiante(id_estudiante) {
            alert('estudiante con ID: ' + id_estudiante);
            // Aquí puedes redirigir a una página 
             window.location.href = 'registrar_nota.php?id_estudiante=' + id_estudiante;
        }
    

        // Función para editar un estudiante
        function editarEstudiante(id_estudiante) {
            alert('Editar estudiante con ID: ' + id_estudiante);
            // Aquí puedes redirigir a una página de edición 
             window.location.href = 'modificar_estudiante.php?id_estudiante=' + id_estudiante;
        }

        // Función para eliminar un estudiante
        function eliminarEstudiante(id_estudiante) {
            if (confirm('¿Estás seguro de eliminar este estudiante?')) {
                alert('Eliminar estudiante con ID: ' + id_estudiante);
                //redirigir a un script de eliminación
                 window.location.href = '../../backend/controlador/controlador_estudiante.php?accion=eliminar&id_estudiante=' + id_estudiante;
            }
        }
    </script>
</body>
</html>