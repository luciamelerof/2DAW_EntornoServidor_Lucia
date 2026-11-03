<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function saltoLinea(): void
    {
        echo "<br>";
    }

    $texto = "ana:7.5,luis:4,marta:9,pedro:,iker:5,elena:10";

    $trozos = explode(",", $texto); // [ana:7.5, luis...]

    $array = [];
    foreach ($trozos as $trozo) {
        $partes = explode(":", $trozo);

        $nombre = $partes[0];
        $nota = $partes[1];

        if (trim($nota) === "") {
            $nota = null;
        }

        $array[$nombre] = $nota;
    }

    var_dump(isset($array["pedro"]));
    saltoLinea();
    var_dump(array_key_exists("pedro", $array));
    saltoLinea();

    ksort($array);
    $vocales = ["a", "e", "i", "o", "u"];

    $notasValidas = [];

    foreach ($array as $a => $n) {
        if (in_array(strtolower($a[0]), $vocales, true)) {
            echo strtoupper($a);
            saltoLinea();
        }

        if ($n !== null) {
            $notasValidas[$a] = (string) $n;
        }
    }

    $volteado = array_flip($notasValidas);
    print_r($volteado);

    $parts = [];
    foreach($array as $a => $n) {
        $parts[] = "$a=$n";
    }

    saltoLinea();
    echo implode(" | ", $parts);
    ?>
</body>

</html>