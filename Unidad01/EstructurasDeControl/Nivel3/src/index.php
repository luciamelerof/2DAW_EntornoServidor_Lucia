<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel 3</title>
</head>

<body>
    <?php


    function saltodeLinea()
    {
        echo "<br>";
    }

    // Ejercicio 11: Gestión de un inventario

    $inventario = [
        "teclado" => [
            "precio" => 25.50,
            "unidades" => 10
        ],
        "raton" => [
            "precio" => 15,
            "unidades" => 20
        ],
        "monitor" => [
            "precio" => 150,
            "unidades" => 5
        ],
        "webcam" => [
            "precio" => 40,
            "unidades" => 8
        ]
    ];

    $valorTotalProducto = 0;
    $valorTotalInv = 0;

    foreach ($inventario as $producto => $datos) {
        saltodeLinea();
        echo $producto . ", precio: " . $datos["precio"] . ", uds: " . $datos["unidades"];
    }

    foreach ($inventario as $producto => $datos) {
        saltodeLinea();

        $valorTotalProducto = $datos["precio"] * $datos["unidades"];

        echo "Valor total de " . $producto . ": " . " euros.";

        $valoresTotalesMayor[] = $valorTotalProducto;
    }

    saltodeLinea();
    foreach ($inventario as $producto => $datos) {
        $valorTotalInv += $datos["precio"] * $datos["unidades"];
    }

    echo "El valor total del inventario es: " . $valorTotalInv . " euros.";

    $mayorValor = 0;
    $productoMayor = "";
    saltodeLinea();
    foreach ($inventario as $producto => $datos) {
        if ($valorTotalProducto > $mayorValor) {
            $mayorValor = $valorTotalProducto;
            $productoMayor = $producto;
        }
    }

    printf("Producto con mayor valor: %s (%.2f euros)", $productoMayor, $mayorValor);
    ?>
</body>

<body>
    <?php
    // Ejercicio 12: Gestión de calificaciones

    $alumnos = [
        "Ana" => [8, 7, 9],
        "Luis" => [5, 6, 4],
        "Marta" => [9, 10, 8],
        "Pedro" => [6, 5, 7],
        "Lucía" => [4, 3, 5]
    ];

    $mediaAlumnos = 0;
    $aprobados = 0;
    $suspensos = 0;
    $mediaAlta = 0;
    $alumnoAlto = 0;

    foreach ($alumnos as $nombre => $notas) {
        $mediaAlumnos = array_sum($notas) / count($notas);

        if ($mediaAlumnos >= 5) {
            $aprobados++;
        } else {
            $suspensos++;
        }

        if ($mediaAlumnos > $mediaAlta) {
            $mediaAlta = $mediaAlumnos;
            $alumnoAlto = $nombre;
        }


        echo $nombre . ", " . " media: " . $mediaAlumnos;
        saltodeLinea();
    }

    echo "Aprobados: " . $aprobados;
    saltodeLinea();
    echo "Suspensos: " . $suspensos;
    saltodeLinea();
    echo "Alumno con la nota más alta: " . $alumnoAlto . " (media: " . $mediaAlta . ").";

    ?>
</body>


</html>