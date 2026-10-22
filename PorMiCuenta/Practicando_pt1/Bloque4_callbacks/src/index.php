<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloque 4 - callbacks</title>
</head>

<body>
    <?php
    // Callback, filter, usort
    // Ejemplo
    $nums = [1, 2, 3, 4];

    $dobles = array_map(fn($n) => $n * 2, $nums);        // [2, 4, 6, 8]
    $pares  = array_filter($nums, fn($n) => $n % 2 == 0); // [1 => 2, 3 => 4] ⚠️ conserva las claves

    usort($nums, fn($a, $b) => $b <=> $a);               // $nums queda [4, 3, 2, 1]

    // Ejercicio 1: 

    // Parte A, array_map
    $precios = [10, 25.5, 3, 40, 18];

    function precioConIva(float $p, $iva = 0.21): float
    {
        return $p * (1 + $iva);
    }

    $preciosConIva = array_map('precioConIva', $precios);

    echo implode("-", $preciosConIva);

    $precios_2eurosMenos = array_map(fn($p) => $p - 2, $precios);

    echo implode("-", $precios_2eurosMenos);

    // Parte B, array_filter
    $preciosM15 = array_filter($precios, fn($p) => $p >= 15);

    print_r($preciosM15);

    // Parte C, usort
    $alumnos = [
        ['nombre' => 'Lucía', 'nota' => 8.5],
        ['nombre' => 'Pablo', 'nota' => 6],
        ['nombre' => 'Marta', 'nota' => 9.2],
    ];

    usort($alumnos, fn($a, $b) => $b['nota'] <=> $a['nota']);

    foreach ($alumnos as $i) {
        echo "Nombre: " . $i['nombre'] . " - " . "nota: " . $i['nota'];
    }


    ?>
</body>

</html>