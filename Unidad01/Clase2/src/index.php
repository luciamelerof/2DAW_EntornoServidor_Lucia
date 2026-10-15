<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 2</title>
</head>

<body>
    <?php
    // Constantes predefinidas
    // Versión de PHP
    echo PHP_VERSION;

    echo "<br>";

    // Entero más grande que el servidor puede procesar
    echo PHP_INT_MAX;

    /*Crea un programa que utilice tres constantes:

        TITULO → El Señor de los Anillos
        DIRECTOR → Peter Jackson
        ANIO → 2001
        Después, muestra por pantalla una frase como:

        El Señor de los Anillos fue dirigida por Peter Jackson en 2001.
        Utiliza const para crear las constantes.*/

    // RETO 1:

    const TITULO = "El señor de los anillos";
    const DIRECTOR = "Peter Jackson";
    const ANIO = 2001;

    echo "<br>";
    echo 'Título: ' . TITULO . ', director: ' . DIRECTOR . ', año: ' . ANIO;

    // RETO 2:

    echo "<br>";

    const IVA = 0.21;

    $precio = 100;

    $operacion = ($precio * IVA);

    echo 'Precio final: ' . $operacion;


    // RETO 3

    echo "<br>";

    const CURSO = "2º DAW";

    if (defined("CURSO")) {
        echo "La constante " . CURSO . " está definida.";
    } else {
        echo "No está definida";
    }

    // Operadores

    // División: / 
    // Resto: %
    // Potencia: **

    // Incremento y decremento

    // $contador++, $contador--
    // === mismo formato mismo contenido, sino false
    // == mismo contenido pero distinto formato (true) o igual (true)

    /*$a = 5;
    $b = "5";

    var_dump($a == $b);
    var_dump($a === $b);
    El resultado será:

    bool(true)
    bool(false) */

    // TERNARIOS
    // $resultado = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";

    $numero = 8;
    $numero << 1; // mueve a la izquierda la posicion en binario
    $numero >> 1; // mueve una posicion a la derecha en binario, de 
    // 1000 a 0100

    echo $numero; // muestra 4

    // Reto 1: punto 6.6 

    $a = 6; //101
    $b = 3; // 11

    echo 'AND: ' . ($a &= $b); // AND a nivel de bits y asignación
    // Muestra true si tienen los mismos bits y false si no tiene los mismos

    echo 'OR: ' . ($a |= $b); // OR

    // Mostrar en que directorio estan los archivos
    echo '<br>';
    echo "<pre>";
    $listado_archivos = `ls`;
    echo "</pre>";

    echo $listado_archivos;

    $listado_pwd = `pwd`;

    echo $listado_pwd;

    // Borrar pantalla:

    $borrar = `clear`;

    //












    ?>
</body>

</html>