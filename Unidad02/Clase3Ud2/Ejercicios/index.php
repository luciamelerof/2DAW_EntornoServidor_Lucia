<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación Funciones</title>
</head>

<body>
    <form action="" method="post">
        <p>Elige una opción:</p>

        <label>
            <input type="radio" name="opcion" value="circulo" checked>
            Círculo
        </label>

        <br>

        <label>
            <input type="radio" name="opcion" value="triangulo">
            Triángulo
        </label>

        <br>

        <label>
            <input type="radio" name="opcion" value="rectangulo">
            Rectángulo
        </label>

        <br>

        <label>Radio círculo: </label>
        <input type="number" name="radio" id="radio" min="0.001">

        <label>Base: </label>
        <input type="number" name="base" id="base" min="0.001">

        <label>Altura: </label>
        <input type="number" name="altura" id="altura" min="0.001">

        <button type="submit">Enviar</button>
    </form>

    <?php

    function circulo(float $radio): float
    {
        return (2 * 3.14) * $radio;
    }

    function rectangulo(float $base, float $altura): float
    {
        return $base * $altura;
    }

    function triangulo(float $base, float $altura): float
    {

        return ($base * $altura) / 2;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $figura = $_POST['opcion'] ?? '';
        $radio = floatval($_POST['radio'] ?? 0);
        $base = floatval($_POST['base'] ?? 0);
        $altura = floatval($_POST['altura'] ?? 0);

        if ($figura === "circulo") {
            $valor = circulo($radio);
            echo "<p>Círculo: {$valor} </p>";
        } elseif ($figura === "triangulo") {
            $valor = triangulo($base, $altura);
            echo "<p>Triangulo: {$valor} </p>";
        } else {
            $valor = rectangulo($base, $altura);
            echo "<p>Rectangulo: {$valor} </p>";
        }
    }


    ?>
</body>

</html>