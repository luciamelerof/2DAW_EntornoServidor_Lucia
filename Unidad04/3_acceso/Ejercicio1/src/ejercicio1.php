<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1: controlador</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo "<p>Accede a esta página enviando el formulario.</p>";
        echo '<p><a href="ejercicio1.html">Volver al formulario</a></p>';
        exit;
    }

    $nombre = $_POST['nombre'] ?? '';
    $turno = $_POST['turno']  ?? "No indicado";
    $curso = $_POST['curso'] ?? "No indicado";
    $intereses = $_POST['intereses'] ?? [];
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Tus preferencias</title>
    </head>

    <body>
        <h1>Tus preferencias</h1>

        <p><strong>Nombre: </strong> <?= htmlspecialchars($nombre) ?></p>
        <p><strong>Turno:</strong><?= htmlspecialchars($turno) ?></p>
        <p><strong>Curso:</strong><?= htmlspecialchars($curso) ?></p>

        <h2>Intereses</h2>
        <?php
        if (empty($intereses)):
        ?>
            <!--Ninguna casilla marcada-->
            <p> No has seleccionado ningún interés</p>
        <?php
        else:
        ?>
            <!--Recorrer el array con un bucle-->
            <ul>
                <?php
                foreach ($intereses as $interes):
                ?>
                    <li><?= htmlspecialchars($interes) ?></li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <p><a href="ejercicio1.html">Volver</a></p>
    </body>

    </html>
</body>

</html>