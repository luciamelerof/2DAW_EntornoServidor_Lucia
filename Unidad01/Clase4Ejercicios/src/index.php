<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 4 Ejercicios</title>
</head>

<body>
    <?php
    function saltoLinea(): void
    {
        echo '<br>';
    }
    // Ejercicio 8
    $a = 12;
    $b = 10;

    saltoLinea();
    echo $a & $b;
    saltoLinea();
    echo $a | $b;
    saltoLinea();
    echo $a ^ $b;
    saltoLinea();

    echo $a << $b;
    saltoLinea();
    echo $b >> 1;

    saltoLinea();
    echo decbin($a);
    saltoLinea();
    echo decbin($b);
    saltoLinea();
    echo decbin($a & $b);
    saltoLinea();
    echo decbin($a | $b);
    saltoLinea();
    echo decbin($a ^ $b);
    saltoLinea();
    echo decbin($a << $b);
    saltoLinea();
    echo decbin($b >> 1);

    // Ejercicio 9

    // -1 menor, 0 igual, 1 mayor
    $x = 25;
    $y = 40;
    $z = 25;

    echo $x <=> $y;
    echo $y <=> $x;
    echo $x <=> $z;

    // Ejercicio 11
    $nombre = "Lucia";
    $aps = "Mel";
    $curso = "2º DAW";

    // Concatena en una variable nombre + apellido
    $nombre .= $aps;

    echo $nombre;
    saltoLinea();

    $nombreCompleto = $nombre . " " . $aps;
    saltoLinea();
    echo $nombreCompleto .= $curso;
    saltoLinea();
    echo "Nombre y aps: $nombreCompleto, curso: $curso";
    saltoLinea();
    echo 'Nombre y aps: {$nombreCompleto}, curso: {$curso}';


    // Ejercicio 12
    $alumno1 = [
        "nombre" => "Ana",
        "edad" => 20,
        "curso" => "DAW"
    ];

    $alumno2 = [
        "nombre" => "Luis",
        "ciudad" => "Granada",
        "curso" => "DAM"
    ];

    $alumno1y2 = $alumno1 + $alumno2;

    $alumno2y1 = $alumno2 + $alumno1;

    saltoLinea();
    var_dump($alumno1y2);
    saltoLinea();
    var_dump($alumno2y1);

    $arrayMerge = array_merge($alumno1, $alumno2);

    saltoLinea();
    print_r($arrayMerge);

    // Ejercicio 13
    $inventario = [
        "teclado" => [
            "precio" => 25.50,
            "unidades" => 10
        ],
        "raton" => [
            "precio" => 15.00,
            "unidades" => 20
        ],
        "cables" => [
            "precio"  => 10.00,
            "unidades" => 8
        ]
    ];

    foreach ($inventario as $i) {
        print_r($i);
    }

    // si tienen keys

    foreach ($inventario as $producto => $datos) {
        echo $datos["precio"] . $datos["unidades"];
        saltoLinea();
    }

    echo json_encode($inventario, JSON_PRETTY_PRINT);

    ?>
</body>

</html>