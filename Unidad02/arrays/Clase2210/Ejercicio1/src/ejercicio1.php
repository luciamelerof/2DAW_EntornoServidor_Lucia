<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios relación</title>
</head>

<body>
    <?php

    // Ejercicio 4
    function mayorMenor(int ...$numeros): array
    {
        usort($numeros, fn($a, $b) => $b <=> $a); // mayor a menor

        return [
            "mayor" => $numeros[0],
            "menor" => $numeros[count($numeros) - 1]
        ];
    }

    $numeros = [12, -3, 25, 0, 8];

    print_r(mayorMenor(...$numeros));

    ?>
    <?php
    // Ejercicio 5
    $numeros = range(1, 20);

    $pares = array_filter($numeros, fn($n) => $n % 2 == 0 && $n !== 0);

    print_r($pares);

    echo "<br>";

    $impares = array_filter($numeros, fn($n) => $n % 2 !== 0 && $n !== 0);

    print_r($impares);

    echo "<br>";
    ?>

    <?php
    // Ejercicio 6
    $numero = "25"; // true
    $numeros = [12, -3, 25, 0, 8];

    echo "<br>";

    var_dump(in_array($numero, $numeros));
    ?>

    <?php
    // Ejercicio 7
    $colores =  ["rojo", "verde", "azul", "amarillo", "negro"];

    unset($colores[1], $colores[3]);

    print_r($colores); // me muestra todos menos los de la pos 1 y 3
    echo "<br>";
    print_r(array_values($colores)); // lo mismo pero con los indices sin contar 1 y 3
    ?>
    <?php
    // Ejercicio 8
    $ns = [18, 4, 27, 9, 12];

    $copiaMayor = $ns;
    usort($copiaMayor, fn($a, $b) => $b <=> $a);
    $copiaMenor = $ns;
    usort($copiaMenor, fn($a, $b) => $a <=> $b);

    echo "<br>";
    print_r($ns);
    echo "<br>";
    print_r($copiaMayor);
    echo "<br>";
    print_r($copiaMenor);
    ?>
    <?php
    // Ejercicio 9
    $producto = [
        "nombre" => "hola",
        "precio" => 3,
        "unidades" => 2
    ];

    $producto["categoria"] = "ADIOS";
    $producto["precio"] = 1;

    $valorTotal = $producto["precio"] * $producto["unidades"];

    echo "<br>";

    echo ($producto["categoria"] . " " . $producto["precio"] . " " . $valorTotal);
    ?>
    <?php
    // Ejercicio 10
    $prueba = ["nombre" => "Ana", "email" => null];

    var_dump(array_key_exists("email", $prueba));
    var_dump(isset($prueba["email"])); // ya que es null
    ?>
</body>

</html>