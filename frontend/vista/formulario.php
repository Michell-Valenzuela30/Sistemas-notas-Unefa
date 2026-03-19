<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESTUDIANTE</title>
  <style type="css" src="../estilos/css/style.css" ></style>
</head>
<body>
  <form action="../../backend/controlador/cont_estudiantes.php" method="post">
    <div>
    <label>NOMBRE</label>
    <input type="text" name="nombre">
    <label>APELLIDO</label>
    <input type="text" name="apellido">
    <label>CORREO</label>
    <input type="email" name="email">
    <label>TELEFONO</label>
    <input type="text" name="telefono">
    <button type="submit" value="insertar" name="accion">REGISTRAR</button>
    </div>
  </form>
</body>
</html>
<!-- -->