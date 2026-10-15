<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excepciones y errores</title>
</head>

<body>
    <form action="" method="post">
        <label for="nombre">Nombre:
            <input type="text" name="nombre">
        </label>
        <br>
        <label for="edad">Edad:
            <input type="number" name="edad">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php

    try {
        $nombre = $_POST["nombre"];
        $edad = filter_var($_POST["edad"], FILTER_VALIDATE_INT);
        if ($edad > 100) {
            throw new Exception("Edad no válida", 100);
        } else {
            if (isset($nombre) && $edad !== false) {
                echo "Eres $nombre y tienes $edad";
            }
        }
    } catch (Exception $e) {
        echo "Mensaje: " . $e->getMessage();
        echo "<br>";
        echo "Codigo: " . $e->getCode();
    }
    ?>
</body>

</html>