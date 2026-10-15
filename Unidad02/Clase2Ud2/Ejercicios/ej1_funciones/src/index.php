<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio funciones</title>
</head>

<body>
    <?php
    $impuesto = 0.21;
    $descuentoFijo = 5;

    $calcularTotalTradicional = function (float $precioBase, float $impuesto, float $descuentoFijo) {
        return ($precioBase - (1 * $impuesto)) - $descuentoFijo;
    };

    $calcularTotalFlecha = fn(float $precioBase) => ($precioBase - (1 - $impuesto)) - $descuentoFijo;

    // Prueba
    echo $calcularTotalTradicional(1000, $impuesto, $descuentoFijo);
    echo $calcularTotalFlecha(1000);
    ?>


</body>

</html>