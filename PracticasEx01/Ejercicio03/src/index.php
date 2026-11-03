<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03 Claude</title>
</head>

<body>
    <?php
    function limpiarNombre(string $n): string
    {
        return ucwords(strtolower($n));
    }

    function emailValido(string $e): bool
    {
        if (filter_var($e, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

    function dominio(string $e): string
    {
        $posicion = strpos("@", $e);

        return substr($e, $posicion);
    }

    function crearUsuario(string $nombre)
    {
        $apellido = strpos(" ", $nombre);
        $user = strtolower(substr($nombre, 0) . substr($nombre, $apellido, strlen($nombre)));


        return $user;
    }

    $texto = "  Ana García;ana@gmail.com;DAW  |  luis pérez;luis@hotmail;DAM | MARTA ruiz;marta@gmail.com;DAW  ";

    $limpio = array_map('trim', explode("|", $texto));


    ?>
</body>

</html>