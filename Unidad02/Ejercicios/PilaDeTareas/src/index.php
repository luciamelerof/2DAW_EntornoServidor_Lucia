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
        $tareas = [];

        array_push($tareas, "tarea1");
        array_push($tareas, "tarea2");
        array_push($tareas, "tarea3");

        while (count($tareas) > 0) {
            echo "Eliminadas: " . array_pop($tareas);
            saltoLinea();
        }
    ?>
</body>

</html>