<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strolower y upper</title>
</head>

<body>

    <body>
        <form action="" method="post">
            <label for="f1">Introduce frase: </label>
            <input type="text" name="f1" id="frase">

            <br>
            <button type="submit">ENVIAR</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $f1 = $_POST["f1"];

            $f1Minusc = strtolower($f1);

            echo "LOWER: $f1Minusc";

            $f1Mayusc = strtoupper($f1);

            echo "<br>";

            echo "UPPER: $f1Mayusc";
        }
        ?>
    </body>
</body>

</html>