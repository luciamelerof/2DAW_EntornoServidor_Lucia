<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
</head>

<body>
    <?php
    function esPrimo(int $entero): bool
    {
        if ($entero < 2) {
            return false;
        }

        if ($entero % 2 == 0) {
            return $entero == 2;
        }

        $limite = (int)(sqrt($entero));

        for ($i = 3; $i <= $limite; $i++) {
            if ($entero % $i == 0) {
                return false;
            }
        }
        return true;
    }


    $primos = [];
    for ($i = 1; $i < 100; $i++) {
        if (esPrimo($i)) {
            $primos[] = $i;
        }
    }


    echo ("Números primos del 1-100: ");
    echo join("-", $primos);

    ?>
</body>

</html>