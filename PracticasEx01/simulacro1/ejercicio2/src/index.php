<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Estadísticas</title>
</head>

<body>
    <?php
    function saltoLinea(): void
    {
        echo "<br>";
    }

    function estadisticas(array &$resumen, int ...$numeros): void
    {
        $total  = 0;
        $maximo = null;
        $minimo = null;
        $media = null;
        $suma = 0;

        foreach ($numeros as $n) {
            $suma += $n;

            if ($maximo === null || $maximo < $n) {
                $maximo = $n;
            }

            if ($minimo === null || $minimo > $n) {
                $minimo =  $n;
            }

            $total++;
        }

        if ($total === 0) {
            $media = null;
        } else {
            $media = round($suma / $total, 2);
        }

        $resumen = ['total' => $total, 'maximo' => $maximo, 'minimo' => $minimo, 'media' => $media];
    }

    $res = [];
    estadisticas($res, 3, 8, 2, 1);
    print_r($res);
    saltoLinea();

    estadisticas($res, 1);
    print_r($res);
    saltoLinea();

    estadisticas($res);
    print_r($res);
    saltoLinea();

    ?>
</body>

</html>