<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones CallBack</title>
</head>

<body>
    <?php

    function saltoLinea()
    {
        echo "<br>";
    }

    function sumar(float $n1, float $n2)
    {
        return $n1 + $n2;
    }

    function restar(float $n1, float $n2)
    {
        return $n1 - $n2;
    }

    function multiplicar(float $n1, float $n2)
    {
        return $n1 * $n2;
    }

    $operacion = "sumar";

    echo 'Suma: ' . call_user_func($operacion, 1, 2);

    saltoLinea();

    $operacion = "restar";

    echo 'Resta: ' . call_user_func($operacion, 1, 2);

    saltoLinea();

    $operacion = "multiplicar";

    echo 'Multiplicación: ' . call_user_func($operacion, 1, 2);
    ?>
</body>

</html>