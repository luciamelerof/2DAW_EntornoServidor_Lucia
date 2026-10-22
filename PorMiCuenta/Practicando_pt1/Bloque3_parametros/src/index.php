<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloque 3 - parámetros</title>
</head>

<body>
    <?php

    function saltoLinea()
    {
        echo "<br>";
    }

    // Concepto 1: valores por defecto
    function saludar(string $nombre = "invitado"): string
    {
        return "Hola, $nombre";
    }
    saludar();          // Hola, invitado
    saludar("Lucía");   // Hola, Lucía

    // LOS PARÁMETROS CON DEFECTO SIEMPRE AL FINAL

    // Concepto 2: argumentos nombrados (PHP 8)

    function ficha(string $nombre, string $ciclo = "DAW", int $curso = 1): string
    {
        return "$nombre - {$curso}º $ciclo";
    }
    echo ficha("Lucía", curso: 2);   // Lucía - 2º DAW

    // Concepto 3: paso por referencia &
    //Normalmente la función recibe una copia. Con & recibe la variable original y puede modificarla:

    function duplicar(int &$n): void
    {
        $n *= 2;
    }
    $x = 5;
    duplicar($x);
    echo $x;   // 10

    // Concepto 4: variádicos ...
    // Sirven para recibir cuantos argumentos quieras, que llegan como array. Es igual que el rest de JS:

    function sumarTodo(int ...$nums): int
    {
        return array_sum($nums);
    }
    sumarTodo(1, 2, 3);       // 6

    $lista = [4, 5, 6];
    sumarTodo(...$lista);     // 15 → spread, como en JS

    // Ejercicio 1 
    // Parte A, por defecto

    function precioConIva(float $precio, float $iva = 0.21): float
    {
        return $precio * (1 + $iva);
    }

    echo precioConIva(100);

    saltoLinea();

    echo precioConIva(100, 0.10);

    saltoLinea();

    // Parte B, nombrados

    function fichaDaw(string $nombre, string $ciclo = "DAW", int $curso = 1): string
    {
        return "{$nombre}, {$curso}º {$ciclo}.";
    }

    echo fichaDaw("Lucía", curso: 2);

    saltoLinea();

    echo fichaDaw(curso: 2, nombre: "Lucía", ciclo: "DAM");

    // Parte C, referencia
    function aplicarSubida(float &$sueldo, float $porcentaje): void
    {
        $sueldo = $sueldo * (1 + ($porcentaje / 100));
    }

    $sueldo = 1000;

    aplicarSubida($sueldo, 10);

    saltoLinea();

    echo $sueldo;

    // Parte D: variádicos
    function media(float ...$notas): float
    {
        $media = (array_sum($notas) / count($notas));
        return round($media, 2);
    }

    echo media(7, 8.5, 6);

    $misNotas = [9, 6.5, 10];

    echo media(...$misNotas);

    ?>
</body>

</html>