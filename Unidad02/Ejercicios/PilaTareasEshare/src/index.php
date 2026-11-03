<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pila de tareas</title>
</head>

<body>
    <?php 
    function saltoLinea() {
        echo "<br>";
    }
    
        function imprimirPila(string ...$array) : string {
            return implode(", ", $array);
        }

        $tareas = [];

        array_push($tareas, "tarea1", "tarea2", "tarea3");

        foreach($tareas as $i) {
            echo $i;
            saltoLinea();
        }



        saltoLinea();

        while(count($tareas) > 0) {
            array_pop($tareas);

            echo imprimirPila(...$tareas);
            
            saltoLinea();
        }

        
    ?>
</body>

</html>