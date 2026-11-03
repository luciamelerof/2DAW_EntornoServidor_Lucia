<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 Claude</title>
</head>

<body>
    <?php

    function saltoLinea() {
        echo "<br>";
    }

    function titulos(string $t) {
        echo str_repeat("-", 3) . $t . str_repeat("-", 3);
        saltoLinea();
    }


    class Alumno
    {
        public function __construct(
            private string $nombre,
            private array $notas
        ) {}

        public function getNombre(): string
        {
            return $this->nombre;
        }

        public function media(): float
        {
            if (count($this->notas) === 0) {
                return 0.0;
            }

            return round(array_sum($this->notas) / count($this->notas), 2);
        }

        public function aprobado(): bool
        {
            if ($this->media() >= 5) {
                return true;
            }

            return false;
        }

        public function __toString(): string
        {
            if ($this->aprobado()) {
                return "{$this->getNombre()} - media: {$this->media()} (Aprobado)";
            }

            return "{$this->getNombre()} - media: {$this->media()} (Suspenso)";
        }
    }

   
    $alumnos = [
        new Alumno ("Ana", [8, 7, 9]),
        new Alumno("Luis", [5, 6, 4]),
        new Alumno("Marta", [9, 10, 8]),
        new Alumno("Pedro", [6, 5, 7]),
        new Alumno("Lucía", [4, 3, 5])
    ];

    titulos("Lista");

    foreach($alumnos as $a) {
        echo($a);
        saltoLinea();
    }

    usort($alumnos, fn($a, $b) => $b->media() <=> $a->media());

    saltoLinea();

    titulos("Ordenados");

    foreach($alumnos as $a) {
        echo($a);
        saltoLinea();
    }


    $nAprobados = count(array_filter($alumnos, fn($a) => $a->aprobado()));

    echo "Aprobados: {$nAprobados}";

    saltoLinea();

    $aprobados = array_map(fn($a) => $a->getNombre(), array_filter($alumnos, fn($a) => $a->aprobado()));

    echo "Nombres: " . implode(", ", $aprobados);

    saltoLinea();

    echo "Mejor alumno: {$alumnos[0]}";

    ?>
</body>

</html>