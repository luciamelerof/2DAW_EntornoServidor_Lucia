<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenar y números</title>
</head>

<body>
    <?php
    function duplicarPositivo(float $numero): float|string
    {

        if ($numero > 0) {
            $resultado = $numero * 2;
            $numero = $resultado;

            return $resultado;
        } else {
            return 'No puedes usar un número negativo o cero';
        }
    }

    
    ?>
</body>

</html>