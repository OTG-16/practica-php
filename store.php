<?php
    include ('conexion.php');

    if(!empty($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        $genre = $_POST['genre'];


        $sql = "INSERT INTO usuarios(nombre, apellidos, correo, comentarios, genero) VALUES ('$firstName', '$lastName', '$email', '$comments', '$genre')";;
        // use exec() because no results are returned
        $conn->exec($sql);

        header('Location: index.php');
    }else{
        echo "No hay datos";
    }
?>