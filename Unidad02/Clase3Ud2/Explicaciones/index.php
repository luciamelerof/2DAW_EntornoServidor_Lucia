<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones variables</title>
</head>

<body>
    <?php

    $valor1 = 10;

    $operacion_uno = fn($valor2) => $valor1 + $valor2;

    $operacion_dos = fn($valor2) => $valor1 - $valor2;

    $numero = "uno";

    $op = "operacion_" . $numero;

    echo "<br>Ahora sumo dos números usando funciones variables: "
        . ($$op)(5); // Imprime 15

    $numero = "dos";

    $op = "operacion_" . $numero;

    echo "<br>Ahora resto dos números usando funciones variables: "
        . ($$op)(2); // Imprime 8

    ?>
</body>

</html>