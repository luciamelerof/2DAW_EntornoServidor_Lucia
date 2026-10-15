<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get y Post</title>
</head>

<body>
    <form action="" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad">
        <br></br>
        <button type="submit">ENVIAR</button>
    </form>

    <?php
    // Recupero el nombre 
    $nombre = $_POST["nombre"];

    // Recupero la edad
    $edad = filter_var($_POST["edad"], FILTER_VALIDATE_INT);

    // Imprimo nombre y edad
    if (isset($nombre) && ($edad !== false)) {
        echo "Hola $nombre, tienes $edad";
    }
    ?>
</body>

</html>