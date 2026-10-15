<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera actividad</title>
</head>

<body>

    <?php

    // Acceder: http://localhost:8080/Unidad01/Clase1/src/
    echo "Hola mundo";
    echo "<br>";
    echo "Estoy aprendiendo PHP";

    $nombre = "Lucia";
    $edad = 25;
    $ciudad = "Granada";

    echo "<br>";
    echo "Me llamo $nombre, tengo $edad años, y vivo en $ciudad";

    // Tipo de variable
    $a = "Cadena";

    echo "<br>";
    echo gettype($a); // string

    // Asignación por valor:
    // $b es una copia independiente de $a
    $b = $a;
    $b = "Otra cadena";

    echo "<br>";
    echo "a = $a, b = $b";
    // a = Cadena, b = Otra cadena

    // Asignación por referencia:
    // $c y $a hacen referencia al mismo valor
    $c = &$a;
    $c = "Modificada";

    echo "<br>";
    echo "a = $a, c = $c";
    // a = Modificada, c = Modificada

    // 3 - VARIABLES
    echo "<br>";
    echo "SERVER: ";
    echo $_SERVER["SERVER_NAME"];

    echo "<br>";
    echo "Método de petición: ";
    echo $_SERVER["REQUEST_METHOD"];

    echo "<br>";

    // Comprobamos si existe $_SESSION antes de mostrarla
    if (isset($_SESSION)) {
        var_dump($_SESSION);
    } else {
        echo "La sesión no está iniciada";
    }

    echo "<br>";

    // Variables variables
    $a = "Hola";
    $$a = "Mundo";

    // $$a equivale a $Hola
    echo "$a $Hola";
    echo "<br>";
    echo "$a [$$a]";

    // Funciones de variables
    // isset() -> comprueba si una variable existe y no es NULL (da false si variable no existe / es NULL)
    // Devuelve true (1) o false (0)

    echo "<br>";
    echo isset($_SERVER["HTTPS_HOST"]);

    // Hace que la variable se ponga a null.
    unset($nombre);

    echo "<br>";
    if (isset($nombre)) {
        echo "Variable nombre: $nombre";
    } else {
        echo "Nombre no está asignado.";
    }

    if (empty($nombre)) {
        //... // HACE LO MISMO QUE ISSET
    }

    // CASTINGS:
    // Si la variable es:
    // Hace la conversión automáticamente

    $numero = "25";

    echo "<br>";
    echo $numero + 5; // 30

    echo "<br>";
    echo $numero . 5; // 255
    echo "<br>";

    // Booleanos -> true: 1 false: 0

    $mayorDeEdad = true;

    echo "<br>";
    echo $mayorDeEdad; //1

    var_dump($mayorDeEdad); // da los datos de la variable mayor de edad
    // 1bool(true) 

    $esAlumno = true;
    $esProfe = false;

    echo "<br>";
    var_dump($esAlumno); // bool(true)

    echo "<br>";
    var_dump($esProfe); // bool(false)

    // Arrays

    $nombres = ["Nombre", "Lucia", "Lorena", "Laura"];
    echo "<br>";
    var_dump($nombres[0]);

    // Array asociativo
    $nombreAsociativo = ["Nombre" => "Lucia", "edad" => 10];

    echo "<br>";

    echo $nombreAsociativo["Nombre"];

    $nombreAsociativoMultiple = [
        ["Nombre" => "Lucia", "edad" => 10],
        ["Nombre" => "Laura", "edad" => 12],
        ["Nombre" => "Lourdes", "edad" => 18],
        ["Nombre" => "Lorena", "edad" => 20]
    ];

    //Imprimirlo por pantalla
    echo "<br>";

    $nombreAsociativoMultiple[2]["Nombre"] . " " . $nombreAsociativoMultiple[2]["edad"];

    // Mostrarlos todos
    foreach ($nombreAsociativoMultiple as $i) {
        echo $i["Nombre"] . " " . $i["edad"];
        echo "<br>";
    }

    // Clases PHP
    class Persona
    {
        private string $nombre;

        public function getNombre(): string
        {
            return $this->nombre;
        }

        public function setNombre(string $nombreUser): void
        {
            $this->nombre = $nombreUser;
        }
    }

    $p1 = new Persona();

    $nombreUser = "Pepe";

    $p1->setNombre($nombreUser);

    echo $p1->getNombre(); // Imprimo el nombre por pantalla (PEPE)

    $nombreSegundo = null;

    echo "<br>";
    var_dump($nombreSegundo); // Imprime nulo

    // Curiosidad

    class Animal
    {
        private string | int $nombre; // se le pueden dar 2 tipos a una variable

        public function getNombre(): string
        {
            return $this->nombre;
        }

        public function setNombre(string | int $nombreUser): void // ponerlo aqui tambien
        {
            $this->nombre = $nombreUser;
        }
    }

    // Ejercicio 1
    $nombreEjercicio = [
        "Nombre" => "Laura",
        "edad" => 20,
        "curso" => "2º DAW"
    ];

    echo "<br>";
    echo $nombreEjercicio["Nombre"] . " " . $nombreEjercicio["edad"] . " " . $nombreEjercicio["curso"];


    // Ejercicio 2
    class Producto
    {
        private string $nombre;
        private float $precio;

        public function getNombre(): string
        {
            return $this->nombre;
        }

        public function getPrecio(): float
        {
            return $this->precio;
        }

        public function setNombre(string $nombreProducto): void
        {
            $this->nombre = $nombreProducto;
        }

        public function setPrecio(float $precioProducto): void
        {
            $this->precio = $precioProducto;
        }

        public function __toString(): string
        {
            return $this->nombre . " " . $this->precio;
        }
    }

    $nombre = "Teclado";
    $precio = 25.50;

    $nombre2 = "Raton";
    $precio2 = 15.99;

    $producto1->setNombre($nombre);
    $producto1->setPrecio($precio);

    $producto2->setNombre($nombre2);
    $producto2->setPrecio($precio2);

    echo $producto1->getNombre() . " " . $producto1->getPrecio();

    echo $producto2->getNombre() . " " . $producto2->getPrecio();

    $productos = [$producto1, $producto2];

    foreach ($productos as $i) {
        echo $i;
        echo "<br>";
    }

    // Constantes

    // 2 formas: define() y const
    // Constantes siempre en MAYUSCULA

    define("LIMITE", 1000);
    echo LIMITE;

    echo "<br>";

    const LIMITE2 = 3.15;
    echo LIMITE2;

    echo "<br>";
    // Comprobar si existe una constante

    var_dump(defined("LIMITE"));

    echo "<br>";

    if (defined("LIMITE")) {
        echo LIMITE . " " . " esta definido";
    } else {
        echo "Constante no definida";
    }

    echo "<br>";

    // PHP version
    echo PHP_VERSION;

    ?>
</body>

</html>