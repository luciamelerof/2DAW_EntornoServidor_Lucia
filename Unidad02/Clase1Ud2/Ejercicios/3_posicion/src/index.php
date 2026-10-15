<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posición</title>
</head>

<body>
    <form action="" method="post">
        <label for="f1">Introduce frase: </label>
        <input type="text" name="f1" id="frase">

        <br>
        <label for="p1">Introduce una palabra: </label>
        <input type="text" name="p1" id="frase">

        <br>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $f1 = $_POST["f1"];
        $p1 = $_POST["p1"];

        $posicion = strpos($f1, $p1);

        if ($posicion !== false) {
            echo "<p>La palabra $p1 está en la posición $posicion de la frase $f1.</p>";
        } else {
            echo "<p>La palabra no está en la frase.</p>";
        }

        $loContiene = str_contains($f1, $p1);
        if ($loContiene) {
            echo "<p>La frase $f1 contiene la palabra $p1.</p>";
        } else {
            echo "<p>No contiene esta palabra.</p>";
        }
    }
    ?>
</body>

</html>