<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 3 ejercicios</title>
</head>

<body>
    <?php
    // EJERCICIO 3
    function saltoLinea()
    {
        echo '<br>';
    }

    $edad = 18;
    $otraEdad = "18";

    var_dump($edad == $otraEdad); // == true porque mismo numero distinto tipo
    var_dump($edad === $otraEdad);
    var_dump($edad != $otraEdad);
    var_dump($edad !== $otraEdad);
    var_dump($edad >= 18);
    var_dump($edad < 21);

    function esMayor(int $edad): string
    {
        $mensaje = ($edad >= 18) ? "Mayor de edad: {$edad}" : "menor de edad: {$edad}";
        return $mensaje;
    }

    saltoLinea();

    echo esMayor(18);


    // Ejercicio 7
    // ?: es mejor que ?? ya que te detecta tanto nulos como cadenas vacias

    $nombre = null;
    $apellidos = null;
    $ciudad = "";
    $telefono = "55555";

    saltoLinea();

    function mostrarInfo(?string $nombre, ?string $apellidos, ?string $ciudad, string $telefono): string
    {
        return "Nombre: {$nombre}, apellidos: " .
            ($apellidos ?? "sin apellidos") . ", ciudad: " .
            ($ciudad ?: "sin ciudad, ") . ", telefono: " .
            ($telefono ?? " sin telefono.");
    }

    echo mostrarInfo($nombre, $apellidos, $ciudad, $telefono);

    function estaVacia(?string $nombre): string
    {
        return ($nombre ?: "La variable nombre esta vacia");
    }

    saltoLinea();

    echo estaVacia($nombre);

    //isset() comprueba si la var existe y no es null-> true/false

    $a = "hola";
    $b = null;
    $c = "";

    var_dump(isset($a)); // true
    var_dump(isset($b)); // false (null)
    var_dump(isset($c)); // true 
    var_dump(isset($d)); //false (no existe)

    ?>
</body>

</html>