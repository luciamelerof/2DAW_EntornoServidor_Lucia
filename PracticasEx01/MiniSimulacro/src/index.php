<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINI SIMULACRO</title>
</head>

<body>
    <?php
    function saltoLinea(): void
    {
        echo "<br>";
    }

    function clasificarNota(float $nota): string
    {
        if ($nota < 0 || $nota > 10) {
            throw new InvalidArgumentException("Nota no válida");
        }

        $clasificacion = match (true) {
            $nota < 5 => "Suspenso",
            $nota < 7 => "Bien",
            $nota < 9 => "Notable",
            default => "Sobresaliente",
        };
        return $clasificacion;
    }

    function totalVentas(array $v): float
    {
        $total = 0;
        foreach ($v as $key) {
            $total += $key;
        }

        return $total;
    }

    function mejorDia(array $v): string
    {
        $mayor = PHP_INT_MIN;
        $nombre = "";

        foreach ($v as $key => $value) {
            if ($mayor < $value) {
                $mayor = $value;
                $nombre = $key;
            }
        }

        return $nombre;
    }

    function diasSinVentas(array $v): string
    {
        return implode(", ", array_keys(array_filter($v, fn($d) => $d === 0)));
    }

    function ranking(array $v): array
    {
        arsort($v);

        return $v;
    }

    $pruebas = [7.5, 4, 10, -1, 9];

    foreach ($pruebas as $n) {
        try {
            echo clasificarNota($n);
            saltoLinea();
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage();
            saltoLinea();
        }
    }

    $ventas = ["Lunes" => 120, "Martes" => 80, "Miércoles" => 150, "Jueves" => 0, "Viernes" => 200];
    echo totalVentas($ventas);
    saltoLinea();
    echo mejorDia($ventas);
    saltoLinea();
    echo diasSinVentas($ventas);
    saltoLinea();
    echo implode(", ", array_keys(ranking($ventas)));
    $ventas["Sábado"] = 90;

    unset($ventas["Jueves"]);

    echo "QUEDAN." . count($ventas);
    ?>
</body>

</html>