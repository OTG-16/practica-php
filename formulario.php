<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <ul>
        <li> <a href="index.php">Inicio</a></li>
        <li> <a href="formulario.php">Formulario</a></li>
    </ul>

    <form action="store.php" method="POST">
        <label for="firstName">
            Nombre: <input type="text" name="firstName" id="firstName">
        </label><br>

        <label for="lastName">
            Apellidos: <input type="text" name="lastName" id="lastName">
        </label><br>
            
        <label for="email">
            Correo: <input type="email" name="email" id="email">
        </label><br>
            
        <label for="comments">
            Comentarios: <textarea name="comments" id="comments" cols="25" rows="3"></textarea>
        </label><br>

        <label for="masculino">Género:<br>
            <input type="radio" name="genre" id="masculino" value="M">Masculino
        </label><br>
        <label for="femenino">
            <input type="radio" name="genre" id="femenino" value="F">Femenino
        </label><br>
        <label for="otro">
            <input type="radio" name="genre" id="otro" value="O">Otro
        </label><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>