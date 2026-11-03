<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio B</title>
</head>

<body>
    <?php
    function saltoLinea(): void
    {
        echo "<br>";
    }

    function calcularEnvio(float $peso, string $zona): float
    {
        if ($peso <= 0) {
            throw new Exception("Peso no válido");
        }

        $precioBase = match ($zona) {
            "peninsula" =>  4.95,
            "baleares" =>  7.5,
            "canarias" => 12.00,
            default => throw new InvalidArgumentException("Zona no válida"),
        };

        if ($peso <= 2) {
            return $precioBase;
        } elseif ($peso <= 5) {
            return $precioBase + 3;
        } elseif ($peso <= 10) {
            return $precioBase + 6;
        } else {
            throw new Exception("Peso excesivo");
        }
    }

    $pruebas = [
        [1.5, "peninsula"],
        [4, "baleares"],
        [8, "canarias"],
        [3, "ceuta"],
        [12, "peninsula"],
        [0, "peninsula"]
    ];

    foreach ($pruebas as [$peso, $zona]) {
        try {
            echo "{$peso} - {$zona}: " . number_format(calcularEnvio($peso, $zona), 2, ",") . "€";
            saltoLinea();
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage();
            saltoLinea();
        } catch (Exception $e) {
            echo $e->getMessage();
            saltoLinea();
        } finally {
            echo "Cálculo terminado";
            saltoLinea();
        }
    }

    ?>
</body>

</html>