<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR MATERIA - UNEFA</title>
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
    require('../../backend/clase/clase_materia.php');
    $obj_materia = new materia();

    $obj_materia->puntero = $obj_materia->mostrar();
    ?>
    <h1>MATERIAS - UNEFA</h1>

    <table>
        <tr>
			<th>COD:</th>
			<th>MATERIA:</th>
            <th>NOMBRE:</th>
            <th>APELLIDO:</th>
            <th>ACCIONES</th> <!-- Nueva columna para los botones -->
        </tr>
        <?php
        $i = 0;
        while (($materia = $obj_materia->extraer_dato()) > 0) {
            echo "<tr>
			        <td>$materia[id_materia]</td>
					<td>$materia[nom_materia]</td>
                    <td>$materia[nombre]</td>
                    <td>$materia[apellido]</td>

                    <td class='acciones'>
                        <!-- Botón EDITAR -->
                        <button class='btn-editar' onclick='editarMateria($materia[id_materia])'>EDITAR</button>
                        <!-- Botón ELIMINAR -->
                        <button class='btn-eliminar' onclick='eliminarMateria($materia[id_materia])'>ELIMINAR</button>
                    </td>
                  </tr>";
            $i++;
        } // fin bucle while
        ?>
    </table>

    <script>
        // Función para editar
        function editarMateria(id_materia) {
            alert('Editar id_materia);
            // Aquí puedes redirigir a una página de edición o abrir un modal
             window.location.href = 'modificar.php?id_materia=' + id_materia;
        }

        // Función para eliminar 
        function eliminarMateria(id_materia) {
            if (confirm('¿Estás seguro de eliminar?')) {
                alert('Eliminar ID: ' + id_materia);
                //redirigir a un script de eliminación
                 window.location.href = '../../backend/controlador/controlador_materia.php?accion=eliminar&id_materia=' + id_materia;
            }
        }
    </script>
</body>
</html>