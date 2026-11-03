<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Contacto</title>
</head>

<body>
    <?php
    $contactos = [
        1 => [
            "nombre"  => "Lucía",
            "telefono" => "622635931",
            "correo" => "lucia@gmail.com"
        ],
        2 => [
            "nombre" => "Juan",
            "telefono" => "6557383",
            "correo" => "juan@gmail.com"
        ],
        3 => [
            "nombre" => "Alvaro",
            "telefono" => "119922",
            "correo" => "alvaro@gmail.com"
        ]
    ];

    function buscarContacto(array $contactos, int $key)
    {
        if (array_key_exists($key, $contactos)) {
            return $contactos[$key];
        }
        return [];
    }

    $contacto = buscarContacto($contactos, 2);

    if ($contacto) {
        echo implode("-", $contacto);
    } else {
        echo "CONTACTO NO ENCONTRADO";
    }
    ?>
</body>

</html>