<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIVEL 1</title>
</head>

<body>


    <form action="" method="post">
        <label for="nota">Nota: </label>
        <input type="number" name="nota" id="nota" min="0" max="10" required>
        <button type="submit">Enviar</button>
        <br>
    </form>

    <?php
    // NIVEL 1

    function saltodeLinea(): void
    {
        echo "<br>";
    }

    // Ejercicio 2: Clasificación de una nota
    if (isset($_POST["nota"])) {
        $nota = (float)$_POST["nota"];

        if ($nota < 0 || $nota > 10) {
            echo "Nota no válida. Introducir entre 1-10";
        } else {
            echo match (true) {
                $nota < 5 => "Suspenso",
                $nota < 6 => "Aprobado",
                $nota < 7 => "Bien",
                $nota < 9 => "Notable",
                $nota <= 10 => "Sobresaliente"
            };
        }
    };

    saltodeLinea();

    if (isset($_POST["nota"])) {
        $nota = (float)$_POST["nota"];

        if ($nota < 0 || $nota > 10) {
            echo "Nota no válida. Introducir entre 1-10";
        } else {
            echo "Con ternario: ", ($nota < 5) ? "Suspenso" : (($nota < 6) ? "Aprobado"
                : (($nota < 7) ? "Bien" : (($nota < 9) ?
                    "Notable" : (($nota <= 10) ? "Sobresaliente" : "Elige una nota entre 0 y 10"))));
        }
    };
    ?>
</body>

<body>
    <form action="" method="post">
        <label for="precio">Precio: </label>
        <input type="number" name="precio" id="precio" min="0" required>

        <label for="socio">Socio: </label>
        <input type="checkbox" name="socio" id="socio">
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    // Ejercicio 3: Calculadora de descuentos

    if (isset($_POST["precio"])) {
        $precio = (float)$_POST["precio"];
        $esSocio = isset($_POST["socio"]);

        if ($precio <= 50 && $precio > 0) {
            $precio = $precio;
        } elseif ($precio >= 50 && $precio < 100) {
            $precio *= 0.95;
        } elseif ($precio >= 100 && $precio < 200) {
            $precio *= 0.9;
        } elseif ($precio >= 200) {
            $precio *= 0.85;
        } else {
            echo "Introduzca un precio mayor que 0, por favor.";
        }

        saltodeLinea();

        if ($esSocio) {
            $precio *= 0.95;
        }

        printf("Precio final: %.2f €", $precio);
    }
    ?>

</body>

<body>
    <form action="" method="post">
        <label for="anio">Año: </label>
        <input type="number" name="anio" id="anio" required>
        <button type="submit">Enviar</button>
        <br>
    </form>

    <?php
    // Ejercicio 4: Año bisiesto

    if (isset($_POST["anio"])) {
        $anio = (int)($_POST["anio"]);
        saltodeLinea();

        if ($anio % 4 === 0 && $anio % 100 !== 0 || $anio % 400 === 0) {
            echo "&emsp; El año " . $anio . " es bisiesto";
        } else {
            echo "&emsp; El año " . $anio . " no es bisiesto";
        }
    }

    ?>
</body>
</html>