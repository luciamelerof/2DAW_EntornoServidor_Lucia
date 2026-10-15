<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIVEL 2</title>
</head>

<body>
    <?php

    function saltodeLinea()
    {
        echo "<br>";
    }

    // Ejercicio 6: Estadísticas de un array

    $numeros = [12, 5, 8, 21, 4, 16, 9, 3];

    $suma = 0;
    $media = 0;
    $mayor = 0;
    $menor = 1000000;
    $posicionDelMayor = 0;
    $cantPares = 0;
    $cantImpares = 0;

    for ($i = 0; $i < count($numeros); $i++) {

        // Suma
        $suma += $numeros[$i];

        // Mayor número 
        if ($numeros[$i] > $mayor) {
            $mayor = $numeros[$i];
            // Posición del mayor
            $posicionDelMayor = $i;
        }

        // Menor número
        if ($numeros[$i] < $menor) {
            $menor = $numeros[$i];
        }

        if ($numeros[$i] % 2 === 0) $cantPares++;
        else $cantImpares++;
    }

    // Media
    $media = $suma / count($numeros);

    saltodeLinea();
    echo "SUMA: " . $suma;
    saltodeLinea();
    echo "MEDIA: " . $media;
    saltodeLinea();
    echo "NÚMERO MAYOR: " . $mayor . ", MENOR: " . $menor;
    saltodeLinea();
    echo "CANTIDAD PARES: " . $cantPares . ", CANTIDAD IMPARES: " . $cantImpares;
    saltodeLinea();
    echo "POSICIÓN DEL MAYOR: (" . $mayor . "): " . $posicionDelMayor;
    saltodeLinea();

    ?>
</body>

<body>
    <?php
    // Ejercicio 7: Gestión de temperaturas

    $temperaturas = [18.5, 21, 19.5, 24, 26.5, 22, 17];
    $diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

    $sumaTemp = 0;
    $contadorTempM20 = 0;
    $contadorMedia = 0;

    for ($i = 0; $i < count($diasSemana); $i++) {

        if ($temperaturas[$i] < 18) {
            echo "Día: " . $diasSemana[$i] . ", temperatura: " . $temperaturas[$i] . " grados. ¡FRÍO!";
        } elseif ($temperaturas[$i] >= 18 && $temperaturas[$i] <= 23) {
            echo "Día: " . $diasSemana[$i] . ", temperatura: " . $temperaturas[$i] . " grados. ¡MEDIO!";
        } else {
            echo "Día: " . $diasSemana[$i] . ", temperatura: " . $temperaturas[$i] . " grados. ¡CALOR!";
        }

        saltodeLinea();

        // Suma
        $sumaTemp += $temperaturas[$i];

        if ($temperaturas[$i] > 20) {
            $contadorTempM20++;
        }

        if ($temperaturas[$i] < $media) {
            $contadorMedia++;
        }
    }

    $media = $sumaTemp / count($diasSemana);

    printf("Media temperaturas: %.2f", $media);
    saltodeLinea();
    echo "Días con temperaturas mayores a 20 grados: " . $contadorTempM20;
    saltodeLinea();
    ?>
</body>

<body>
    <?php
    // Ejercicio 8: Filtrar números de un array

    $numeros = [3, 12, 7, 20, 15, 8, 25, 10, 2];

    $menoresQue10 = [];
    $entre10y20 = [];
    $mayoresQue20 = [];


    foreach ($numeros as $i) {
        if ($i < 10) {
            $menoresQue10[] = $i;
        } elseif ($i >= 10 && $i <= 20) {
            $entre10y20[] = $i;
        } else {
            $mayoresQue20[] = $i;
        }
    }

    // Conteos
    $conteos = [
        "Menores que 10: " => count($menoresQue10),
        "Entre 10/20: " => count($entre10y20),
        "Mayores que 20: " => count($mayoresQue20)
    ];

    foreach ($conteos as $i => $cantidad) {
        echo "{$i}: {$cantidad} elementos. <br>";
    }

    $maximo = max($conteos);
    $gruposMayores = array_keys($conteos, $maximo);

    echo "Grupo con más elementos: " . implode(" y ", $gruposMayores) . " ({$maximo})";
    ?>

</body>

<body>
    <?php
    // Ejercicio 9: Ordenación de números

    $numeros = [14, 3, 25, 8, 17, 1, 10, 6];

    // Mostrar array
    print_r($numeros);

    // Ordenar de < a> (sort)
    $ordenadoMenorAMayor = $numeros;
    sort($ordenadoMenorAMayor);

    saltodeLinea();

    print_r($ordenadoMenorAMayor);

    // Ordenar de mayor a menor (rsort)
    $ordenadoMayorAMenor = $numeros;
    rsort($ordenadoMayorAMenor);

    saltodeLinea();

    print_r($ordenadoMayorAMenor);

    // Ordenado usort y copia
    $ordenadoUsort = $numeros;

    usort($ordenadoUsort, fn($a, $b) => $a <=> $b); // menor a mayor

    saltodeLinea();
    print_r($ordenadoUsort);

    ?>
</body>

<body>
    <?php
    // Ejercicio 10: Buscar un elemento en un array
    saltodeLinea();
    $numeros = [14, 25, 8];
    $buscar = 14;
    $posiciones = [];

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] === $buscar) {
            $posiciones[] = $i;
        }
    }

    if (count($posiciones) > 0) {
        echo "Encontrado en la posición/es: " . implode(", ", $posiciones);
    } else {
        echo "No se encuentra el número ", $buscar;
    }
    ?>
</body>

</html>