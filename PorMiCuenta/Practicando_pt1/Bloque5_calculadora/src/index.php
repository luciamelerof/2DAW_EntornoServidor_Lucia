<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloque 5 - calculadora de figuras</title>
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

        <?php
        $figuras = [
            'circulo'    => fn(float $radio): float => 2 * M_PI * $radio,
            'triangulo'  => fn(float $base, float $altura): float => ($base * $altura) / 2,
            'rectangulo' => fn(float $base, float $altura): float => $base * $altura,
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $figura = $_POST['opcion'] ?? '';
            $radio  = floatval($_POST['radio'] ?? 0);
            $base   = floatval($_POST['base'] ?? 0);
            $altura = floatval($_POST['altura'] ?? 0);

            if (!array_key_exists($figura, $figuras)) {
                echo "<p>No existe esta figura.</p>";
            } else {
                $medidas = ($figura === 'circulo' ? [$radio] : [$base, $altura]);
                $medidasMalas = array_filter($medidas, fn($m) => $m <= 0);

                if (count($medidasMalas) > 0) {
                    echo "Error: medidas negativas o iguales a 0.0";
                } else {
                    $resultado = $figuras[$figura](...$medidas);
                    echo $resultado;
                }
            }
        }


        ?>
</body>

</html>