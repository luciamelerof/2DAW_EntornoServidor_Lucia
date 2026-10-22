<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloque 2 - ámbitos de variables </title>
</head>

<body>
    <?php

    function saltoLinea()
    {
        echo "<br>";
    }

    // Concepto 1: una función NO ve las variables de fuera

    // Función = caja cerrada; solución -> pasarla como parámetro

    // Concepto 2: static (variable recuerda su valor)

    function contador(): int
    {
        static $n = 0;   // solo se inicializa la PRIMERA vez
        $n++;
        return $n;
    }
    echo contador(); // 1
    echo contador(); // 2

    // Concepto 3: use vs fn.
    // Las funciones anónimas tampoco ven el exterior, salvo que se lo pidas con use:

    $iva = 0.21;

    $conUse = function (float $p) use ($iva) {   // copia $iva AQUÍ
        return $p * (1 + $iva);
    };

    $conFlecha = fn(float $p) => $p * (1 + $iva); // captura automática (también copia)

    // EJERCICIO 1

    // Parte A
    function contarVisitas(): string
    {
        static $contador = 0;
        $contador++;
        return "Visita número " . $contador . ".";
    }

    saltoLinea();

    echo contarVisitas();

    saltoLinea();

    echo contarVisitas();

    saltoLinea();

    echo contarVisitas();

    saltoLinea();

    // Parte B
    $descuento = 10;

    $aplicarDescuento = function (float $precio) use ($descuento) : float {
        return $precio - $descuento;
    };

    $aplicarDescuentoFlecha = fn(float $precio) => $precio - $descuento;

    $descuento = 50;

    echo $aplicarDescuento(100); // 90 (coge el descuento cuando se crea la function)
    saltoLinea();
    echo $aplicarDescuentoFlecha(100); // 90 (igual)
    saltoLinea();
    
    ?>
</body>

</html>