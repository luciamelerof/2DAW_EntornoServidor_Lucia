<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 5</title>
</head>

<body>
    <form action="" method="post">
        <label for="numero">Numero 1/7:</label>
        <input type="number" name="dia" min="1" max="7" required>
        <button type="submit">ENVIAR</button>
    </form>

    <?php

    // MATCH

    // Pido al user un dia 

    if (isset($_POST["dia"])) {
        $dia = (int)$_POST["dia"];

        echo match ($dia) {
            1, 2, 3, 4, 5 => "LABORABLE",
            6, 7 => "NO LABORABLE",
            default => "NO DISPONIBLE"
        };
    }

    function saltoLinea()
    {
        echo "<br>";
    }

    $inventario = [
        "teclado" => [
            "precio" => 25.50,
            "unidades" => 10
        ],
        "raton" => [
            "precio" => 15.00,
            "unidades" => 20
        ],
        "cables" => [
            "precio"  => 10.00,
            "unidades" => 8
        ]
    ];


    // Calcula el valor total del inventario sumando los resultados. 

    $precioTotal = 0.0;

    foreach ($inventario as $i => $datos) {
        $precioTotal += $datos["unidades"] * $datos["precio"];
    }

    printf("El precio total del inventario es %.2f", $precioTotal);

    // Actualiza las unidades de uno de los productos utilizando una asignación combinada.

    saltoLinea();

    $valor1 = 6;

    // Añade un producto

    $inventario["teclado"]["unidades"] += $valor1;

    echo "El nuevo valor de las uds de teclado es: ", $inventario["teclado"]["unidades"];

    saltoLinea();

    $inventario["torre"] = ["precio" => 30, "unidades" => 10];

    echo "Nueva torre hay ", $inventario["torre"]["unidades"], " unidades, ", $inventario["torre"]["precio"], " euros.";

    foreach ($inventario as $i => $datos) {
        echo $i, ": ", "Unidades: ", $datos["unidades"], ", precio: ", $datos["precio"];
        saltoLinea();
    }


    // Ejercicio 14. Comparación de arrays

    $a = ["nombre" => "Marta", "edad" => 21];
    $b = ["edad" => 21, "nombre" => "Marta"];
    $c = ["nombre" => "Marta", "edad" => "21"];

    var_dump($a == $b);
    var_dump($a == $c);
    var_dump($b == $c);

    saltoLinea();
    var_dump($a === $b);
    var_dump($a === $c);
    var_dump($b === $c);

    saltoLinea();
    var_dump($a != $b);
    var_dump($a != $c);
    var_dump($b != $c);

    saltoLinea();
    var_dump($a !== $b);
    var_dump($a !== $c);
    var_dump($b !== $c);

    // Ejercicio 15. Ficha de alumno

    $fichaAlumno = [
        "nombre" => "Juan Melero",
        "edad" => 59,
        "curso" => "2º DAW",
        "notasModulos" => [
            "ingles" => 10,
            "frances" => 8,
            "matematicas" => 7
        ]
    ];

    $notaMedia = 0;
    $contador = 0;

    foreach ($fichaAlumno["notasModulos"] as $i => $notas) {
        $notaMedia += $notas;

        $contador++;
    }

    $notaFinal = $notaMedia / $contador;

    print_r("Nota media de todas las asignaturas: %.2f", $notaFinal);

    saltoLinea();

    echo  "&emsp; DATOS FICHA: ";
    echo  "Nombre: ", $fichaAlumno["nombre"];
    saltoLinea();
    echo "Edad: ", $fichaAlumno["edad"];
    echo  "Curso: ", $fichaAlumno["curso"];

    foreach ($fichaAlumno["notasModulos"] as $i => $notas) {
        echo  $i . " " .  ": " . " " . $notas;
        saltoLinea();
    }

    echo ($notaFinal >= 5) ? 'La nota final es mayor o igual a 5' : 'Es menor a 5';
    ?>


</body>

</html>