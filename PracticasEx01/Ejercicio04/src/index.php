<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio A</title>
</head>

<body>
    <?php 
    function saltoLinea() : void {
        echo "<br>";
    }

    function titulo(string $nombre) : void {
        echo str_repeat("-", 3) . "COMPROBACIÓN DE {$nombre}" . str_repeat("-", 3);
        saltoLinea();
    }

        $a = "0";
        $b = 0.0;
        $c = null;
        $d = [];
        $e = "PHP";
        $f = 42;

        function comprobar(mixed $var) : void{
            var_dump(isset($var));
            saltoLinea();
            var_dump(empty($var));
            saltoLinea();
            var_dump(is_null($var));
            saltoLinea();
            var_dump(is_int($var));
            saltoLinea();
            var_dump(gettype($var));
            saltoLinea();
        }

        titulo('$a');
        comprobar($a);

        titulo('$b');
        comprobar($b);

        titulo('$c');
        comprobar($c);

        titulo('$d');
        comprobar($d);

        titulo('$e');
        comprobar($e);

        titulo('$f');
        comprobar($f);
    ?>
</body>

</html>