<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    $tienda =  [
        [
            "producto" => "camiseta",
            "precio" => 11
        ],
        [
            "producto" => "pantalon",
            "precio" => 20
        ]
    ];

    // Impr camiseta 
    echo $tienda[0]["precio"];

    // Impr todo
    foreach ($tienda as $key => $value) {
        print_r($value);
    }

    echo '<br>';

    foreach ($tienda as $i => $item) {
        $tienda[$i]["stock"] = random_int(1, 80);
        print_r($tienda[$i]);
        echo '<br>';
    }
    ?>
</body>

</html>