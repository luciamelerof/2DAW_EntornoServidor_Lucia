<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parámetros</title>
</head>

<body>

    <?php
    // Ejercicio 8 pto 16
    function saltoLinea()
    {
        echo "<br>";
    }

    function crearMensaje(string $nombre, string $saludo = "Hola", string $idioma = "ES"): string
    {
        return "$saludo, $nombre, tu idioma es $idioma.";
    }

    echo crearMensaje(nombre: "Lucia"); // solo un parametro
    saltoLinea();
    echo crearMensaje(saludo: "Buenos días", nombre: "Juan", idioma: "EN");
    saltoLinea();
    echo crearMensaje(idioma: "AL", nombre: "Lucas");
    saltoLinea();
    ?>

    <?php
    // Ejercicio 9
    function sumarNumeros(float ...$numeros): float
    {
        return array_sum($numeros);
    }

    function multiplicarNumeros(float ...$numeros): float
    {
        return array_product($numeros);
    }

    $numeros = [1, 5, 8, 45];

    echo "Suma: " . sumarNumeros(...$numeros);
    saltoLinea();
    echo "Multiplicación: " . multiplicarNumeros(...$numeros);
    ?>

    <?php
    // Ejercicio 10
    function clasificarNota(float $nota): ?string
    {
        if ($nota < 0 || $nota > 10) {
            return null;
        }

        return match (true) {
            $nota < 5 => "Suspenso",
            $nota < 6 => "Suficiente",
            $nota < 7 => "Bien",
            $nota < 9 => "Notable",
            default => "Sobresaliente"
        };
    }

    saltoLinea();
    echo clasificarNota(8);
    ?>

    <?php
    //Ejercicio 12

    $contador = 10;

    function incrementarLocal()
    {
        $contador = 1;
        $contador++;
        echo "Contador local: $contador";
    }

    function incrementarGlobal()
    {
        global $contador;
        $contador++;
        echo "Contador global: $contador";
    }
    incrementarGlobal();
    incrementarLocal();
    ?>

    <?php
    // Ejercicio 13
    function intercambiar(int &$a, int &$b)
    {
        $bAntigua = $b;
        $b = $a;
        $a = $bAntigua;
    }

    $a = 1;
    $b = 2;

    intercambiar($a, $b);

    echo "a: $a, b: $b";
    ?>

    <?php
    function venderProducto(int &$unidades, int $unidadesVender): bool
    {
        if ($unidades < $unidadesVender) {
            echo "No hay suficientes unidades.";
            return false;
        } else {
            $unidades -= $unidadesVender;
            echo "Unidades nuevas: $unidades";
            return true;
        }
    }

    $unidades = 8;

    saltoLinea();
    venderProducto($unidades, 4);

    ?>
</body>

</html>