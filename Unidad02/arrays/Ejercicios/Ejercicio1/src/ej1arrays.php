<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $datos = [
        0 => "primero",
        5 => "segundo",
    ];

    $datos["6"] = "tercero"; // lo coge solo

    foreach ($datos as $key => $value) {
        echo "$key $value <br>";
    }

    $coordenadas = [10, 20, 30];

    [, $x, $y] = $coordenadas;

    list($x, $y) = $coordenadas;

    echo $x; // 20
    echo $y; // 30 

    $colores = ["rojo", "verde", "azul"];

    [$primero] = $colores;

    [$primero, , $tercero] = $colores; // se salta la segunda posicion

    echo $primero; // rojo
    echo $tercero; // azul

    
    ?>
</body>

</html>