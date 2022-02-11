<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php include ('conexion.php'); ?>
    <h1>Introducción a PHP</h1>
    <ul>
        <li> <a href="index.php">Inicio</a></li>
        <li> <a href="formulario.php">Formulario</a></li>
    </ul>

    <?php 
        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>Correo</th><th>Comentarios</th><th>Género</th></tr>";
        foreach ($stmt->fetchAll() as $miembro) {
            echo 
            "<tr>
                <td>", $miembro['id'], "</td>
                <td>", $miembro['nombre'], "</td>
                <td>", $miembro['apellidos'], "</td>
                <td>", $miembro['correo'], "</td>
                <td>", $miembro['comentarios'], "</td>
                <td>", $miembro['genero'], "</td>
            </tr>";
          }
    ?>


</body>
</html>