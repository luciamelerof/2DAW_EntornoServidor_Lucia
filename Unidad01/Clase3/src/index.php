<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 3</title>
</head>

<body>
    <?php

    function saltoLinea(): void
    {
        echo '<br>';
    }

    $a = 6;
    $b = 1;

    /* ----------------------------------------------------- */
    // 6.10 Nave espacial

    echo $a <=> $b;
    saltoLinea();
    // -1 (si a < b),
    // 0 (si a = b), 
    // 1 (si a > b)

    $numeros = [8, 2, 6, 10, 20];

    echo "Array desordenado: ";
    print_r($numeros); // print_r puede imprimir números

    // Métodos que como parámetros reciben otra función USORT
    usort(
        $numeros,
        function ($x, $y) {
            return $x <=> $y; // devuelve 1 ya que a > b
        }
    );

    saltoLinea();

    // USORT ordena el array de menor a mayor por defecto. 
    // si pones return $y <=> $x es de mayor a menor
    echo "Array ordenado: ";
    print_r($numeros);


    /* ----------------------------------------------------- */
    // 6.11 Nullsafe

    class Estudios
    {
        public string $universidad = "UGR";
        public string $titulo = "Desarrollo aplicaciones web";
    }

    class Usuario
    {
        private Estudios $estudios;

        // Constructor
        public function __construct(Estudios $estudios)
        {
            $this->estudios = $estudios;
        }

        public function getEstudios(): Estudios
        {
            return $this->estudios;
        }
    }

    $estudios = new Estudios();
    $usuario = new Usuario($estudios);
    $sesion = new Session($usuario);

    saltoLinea();

    echo $usuario->getEstudios()->universidad;

    saltoLinea();

    echo $usuario->getEstudios()->titulo;

    class Session
    {
        public ?Usuario $usuario; // que usuario puede ser Usuario | null

        public function __construct(?Usuario $usuario)
        {
            $this->usuario = $usuario;
        }
    }
    saltoLinea();
    echo $sesion?->usuario?->getEstudios()->universidad; // imprime UGR

    $sesionNula = new Session(null);

    saltoLinea();
    echo $sesionNula?->usuario?->getEstudios()->universidad; // no imprime nada


    // Concatenación arrays

    $frutas1 = ["fresa", "banana"];
    $frutas2 = ["papaya", "piña"];

    $frutas = $frutas1 + $frutas2;

    print_r($frutas); // imprime solo el primer array: fresa banana
    // ya que array 1= [0, 1] y array2 [0,1] tambien


    saltoLinea();

    // Ahora con un array asociativo que si lo suma si tienen distintas claves
    $estudios1 = [
        "Nombre1" => "informatica",
        "anio1" => 1987
    ];
    $estudios2 = [
        "Nombre2" => "religion",
        "anio2" => 1958
    ];

    $estudios = $estudios1 + $estudios2;

    print_r($estudios);

    saltoLinea();

    // Para juntar frutas1+frutas2
    print_r(array_merge($frutas1, $frutas2));
    ?>
</body>

</html>