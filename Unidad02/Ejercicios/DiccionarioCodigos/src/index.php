<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario de códigos</title>
</head>

<body>
    <?php 
        $idiomas = ["es" => "Español", "en" => "Inglés", "fr" => "Francés"];

        $codigo = array_flip($idiomas);
        print($codigo);

        $idiomas["mx"] = "español";

        $codigo = array_flip($idiomas);

        print_r($codigo);
    ?>
</body>

</html>