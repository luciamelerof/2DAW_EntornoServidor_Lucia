<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Ejercicio prueba</title>
</head>

<body>
    <?php
    function saltoLinea(): void
    {
        echo "<br>";
    }

    $libros = [
        [
            "titulo" => "El principito",
            "autor" => "Antoine de Saint-Exupéry",
            "categoria" => "Fantasia",
            "precio" => 12.50,
            "disponibles" => 4
        ],
        [
            "titulo" => "Don Quijote",
            "autor" => "Miguel de Cervantes",
            "categoria" => "Clasico",
            "precio" => 18.90,
            "disponibles" => 3
        ],
        [
            "titulo" => "1984",
            "autor" => "George Orwell",
            "categoria" => "Ciencia ficcion",
            "precio" => 15.75,
            "disponibles" => 5
        ],
        [
            "titulo" => "Harry Potter",
            "autor" => "J.K. Rowling",
            "categoria" => "Fantasia",
            "precio" => 22.00,
            "disponibles" => 2
        ],
        [
            "titulo" => "La Celestina",
            "autor" => "Fernando de Rojas",
            "categoria" => "Clasico",
            "precio" => 14.50,
            "disponibles" => 6
        ]
    ];

    function mostrarLibros(array $libros): void
    {
        foreach ($libros as $l) {
            echo $l["titulo"] . " " . $l["autor"] . " " . $l["categoria"] . " " . $l["precio"] . " " . $l["disponibles"];
            saltoLinea();
        }
    }

    mostrarLibros($libros);
    saltoLinea();

    function buscarLibro(array $libros, string $titulo)
    {
        foreach ($libros as $l) {
            if ($l["titulo"] === $titulo) {
                return $l;
            }

            return null;
        }
    }

    print_r(buscarLibro($libros, "Don Quijote"));
    saltoLinea();
    print_r(buscarLibro($libros, "Hola"));

    function contarDisponibles(array $libros): int
    {
        $total = 0;

        foreach ($libros as $l) {
            $total += $l["disponibles"];
        }

        return $total;
    }

    echo contarDisponibles($libros);
    saltoLinea();

    function obtenerPorCategoria(array $libros, string $categoria): array
    {
        $librosCategoria = [];

        foreach ($libros as $l) {
            if ($categoria === $l["categoria"]) {
                array_push($librosCategoria, $l["titulo"]);
            }
        }

        return $librosCategoria;
    }

   print_r(obtenerPorCategoria($libros, "Clasico"));

    function calcularValorBiblioteca(array $libros): float
    {
        $total = 0;

        foreach ($libros as $l) {
            $total += $l["precio"] * $l["disponibles"];
        }

        return round($total, 2);
    }

    saltoLinea();
    echo calcularValorBiblioteca($libros);





    ?>
</body>

</html>