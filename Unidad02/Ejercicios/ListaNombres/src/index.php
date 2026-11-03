<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista nombres</title>
</head>

<body>
    <?php
    // Ejercicio 15
    function ordenarCadena(string $cadena): string
    {
        $nombres = array_map('trim', explode(";", $cadena));

        sort($nombres);
        return implode(", ", $nombres);
    }

    echo ordenarCadena("Marta; Ana;Luis; Pedro");
    ?>
</body>

</html>