<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2: controlador</title>
</head>

<body>
    <?php
    $contacto = $_POST["contacto"] ?? [];

    if (empty($contacto)) {
        echo "No hay información sobre contacto.";
    } else {
        $nombre = $contacto["nombre"] ?? '';
        $apellidos = $contacto["apellidos"]  ?? '';
        $email = $contacto["email"]  ?? '';

        echo "Nombre: " . htmlspecialchars($nombre, ENT_QUOTES, "utf-8") .
            "Apellidos: " . htmlspecialchars($apellidos, ENT_QUOTES, "utf-8") .
            "Email:  " . htmlspecialchars($email, ENT_QUOTES, "utf-8");

        foreach ($contacto as $c) {
        }
    }


    ?>
</body>

</html>