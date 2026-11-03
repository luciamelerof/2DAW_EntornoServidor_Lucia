<?php declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificador de notas</title>
</head>

<body>
    <?php

    

    function saltoLinea(): void
    {
        echo "<br>";
    }

    function clasificarNota(int | float | null $nota): string
    {
        static $LLAMADAS = 0;

        $LLAMADAS++;

        $calificacion = match (true) {
            $nota === null => "Sin calificar",
            $nota < 0 || $nota > 10 => throw new InvalidArgumentException("Nota fuera de rango: $nota"),
            $nota < 5 => "Suspenso ({$nota})",
            $nota < 7 => "Aprobado ({$nota})",
            $nota < 9 => "Notable ({$nota})",
            default => "Sobresaliente ({$nota})",
        };

        $resultado = $calificacion . ", llamada número " . $LLAMADAS;


        return $resultado;
    }

    $pruebas = [9.5, 5, 4.99, 0, null, 11, -1, "7"];
    
    foreach ($pruebas as $valor) {
        try {
            echo clasificarNota($valor);
            saltoLinea();
        } catch (InvalidArgumentException $error) {
            echo "Error: {$error->getMessage()}";
            saltoLinea();
        } catch (TypeError $error) {
            echo "Error: {$error->getMessage()}";
            saltoLinea();
        } finally {
            echo "Fin de la comprobación";
            saltoLinea();
        }
    }


    ?>
</body>

</html>