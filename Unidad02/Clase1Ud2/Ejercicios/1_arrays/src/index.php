<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Predefinidas</title>
</head>

<body>
    <form action="" method="post">
        <label for="p1">Palabra 1: </label>
        <input type="text" name="p1" id="palabra1">

        <br>

        <label for="p2">Palabra 2: </label>
        <input type="text" name="p2" id="palabra2">

        <br>

        <button type="submit">ENVIAR</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $p1 = $_POST["p1"];
        $p2 = $_POST["p2"];

        if (!strcmp($p1, $p2)) {
            echo "<p>Las cadenas son iguales</p>";
        } else {
            echo "<p>Las cadenas no son iguales</p>";
        }
    }
    ?>

</body>

</html>