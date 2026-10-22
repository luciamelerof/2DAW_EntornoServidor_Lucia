<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Unidad 2. Funciones</title>
</head>

<body>
    <?php
    function saltoLinea()
    {
        echo "<br>";
    }

    // Actividad 1

    // Parte A

    function saludarManana(string $nombre): string
    {
        return "BUENOS DÍAS, "  . $nombre;
    }

    function saludarTarde(string $nombre): string
    {
        return "BUENAS TARDES, "  . $nombre;
    }

    function saludarNoche(string $nombre): string
    {
        return "BUENAS NOCHES, " . $nombre;
    }

    $momento = "Manana";

    $f = "saludar" . $momento;

    if (is_callable($f)) {
        echo $f("Lucía");
    } else {
        echo "No existe la función $f";
    }

    saltoLinea();

    // Parte B

    $nombre = "curso";
    $$nombre = "2º DAW";

    $nombre2 = "modulo";
    $$nombre2 = "Entorno Servidor";

    echo $curso . " - " . $modulo;

    ?>
</body>

</html>