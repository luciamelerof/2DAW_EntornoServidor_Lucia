<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio D</title>
</head>

<body>
    <?php

use LDAP\Result;

    function saltoLinea() : void {
        echo "<br>";
    }

    $notas = [
        "Ana" => [7, 8.5, 9],
        "Luis" => [4, 5, 3.5],
        "Marta" => [10, 9, 9.5],
        "Pedro" => [6, 5, 7],
        "Sara" => []
    ];

    function media(array $n): float {
        $total = 0;
        $contador = 0;

        foreach($n as $nota) {
            $contador++;
            $total += $nota;
        }

        if (count($n) === 0) {
            return 0;
        }

        return $total / $contador;
    }

    function medias(array $notas) : array {
        $result = [];
        foreach($notas as $nombres => $not) {   
            $result[$nombres] = number_format(media($not), 2, ",");
            
        }

        return $result;
    }

    function clasificacion(array $notas) : array {
        $prueba = medias($notas);

        arsort($prueba);

        return $prueba;
    }

    function ordenarAlumnos(array $notas) : string {
        $alumnos = [];

        $alumnos = krsort($notas);

        $alumnos = array_keys($notas);

        return implode(",", $alumnos);
    }

    function aprobados(array $notas) : string {
        $aprobados= [];

        foreach($notas as $key => $value) {
            if (media($value) >=5) {
                $aprobados[]= $key;
            }
        }

        return implode(",", $aprobados);
    }


    echo number_format(media($notas["Ana"]), 2, ",");
    saltoLinea();
    print_r(medias($notas));
    saltoLinea();
    print_r(clasificacion($notas));
    saltoLinea();
    echo ordenarAlumnos($notas);
    saltoLinea();
    echo aprobados($notas);

    
    ?>
</body>

</html>