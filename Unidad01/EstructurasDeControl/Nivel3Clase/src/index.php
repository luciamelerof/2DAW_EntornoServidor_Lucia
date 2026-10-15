<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel 3 Clase - A partir del 13</title>
</head>

<body>
    <?php

    function saltodeLinea()
    {
        echo "<br>";
    }

    $departamentoA = [
        "Ana" => "Desarrollo",
        "Luis" => "Sistemas",
        "Marta" => "Diseño"
    ];

    $departamentoB = [
        "Pedro" => "Redes",
        "Ana" => "Bases de datos",
        "Lucía" => "Desarrollo"
    ];


    // Array A + B
    $departamentosAB = $departamentoA + $departamentoB;
    $departamentosBA = $departamentoB + $departamentoA;

    // A + B
    print_r($departamentosAB); // manda el primero (A)

    saltodeLinea();

    // B + A
    print_r($departamentosBA); // manda el primero (B)

    saltodeLinea();

    // Con array_merge
    print_r(array_merge($departamentoA, $departamentoB)); // sobreescribe si se repiten claves siempre se queda con el último

    // Si quiero un array solo de los que se repiten
    $arrayDeRepetidos = array_intersect_key($departamentoA, $departamentoB);
    print_r($arrayDeRepetidos); // aquí prevalece el valor de la primera vez que se encuentre la key
    ?>
</body>

<body>
    <?php
    // Ejercicio 14: Funciones para operar con arrays

    function calcularSuma(array $numeros): float|int
    {
        $suma = 0;
        foreach ($numeros as $i) {
            $suma += $i;
        }

        return $suma;
    }

    function calcularMedia(array $numeros): float
    {
        $suma = 0;
        foreach ($numeros as $i) {
            $suma += $i;
        }

        $media = $suma / count($numeros);

        return $media;
    }

    function obtenerMaximo(array $numeros): int|float
    {
        $mayor = 0;

        foreach ($numeros as $i) {
            if ($mayor < $i) {
                $mayor = $i;
            }
        }

        return $mayor;
    }

    function contarPares(array $numeros): int
    {
        $contadorPar = 0;
        foreach ($numeros as $i) {
            if ($i % 2 === 0) {
                $contadorPar++;
            }
        }

        return $contadorPar;
    }

    function resumen(array $numeros): array
    {
        $arrayAsociativo = [
            "SUMA" => calcularSuma($numeros),
            "MEDIA" => calcularMedia($numeros),
            "MAXIMO" => obtenerMaximo($numeros),
            "PARES" => contarPares($numeros)
        ];

        return $arrayAsociativo;
    }

    $numeros = [14, 3, 25, 8, 17, 1, 10, 6];

    saltodeLinea();

    print_r(resumen($numeros));
    saltodeLinea();

    ?>
</body>

<body>
    <?php
    // Ejercicio 15: Clase Producto
    class Producto
    {
        public function __construct(private string $nombre, private float $precio, private int $unidades)
        {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->unidades = $unidades;
        }

        public function getNombre(): string
        {
            return $this->nombre;
        }

        public function getPrecio(): float
        {
            return $this->precio;
        }

        public function getUnidades(): int
        {
            return $this->unidades;
        }

        public function setNombre(string $nombre)
        {
            $this->nombre = $nombre;
        }

        public function setPrecio(float $precio)
        {
            $this->precio = $precio;
        }

        public function setUnidades(int $unidades)
        {
            $this->unidades = $unidades;
        }

        public function calcularValor(): float
        {
            return $this->precio * $this->unidades;
        }

        public function aplicarDescuento(float $porcentaje): void
        {
            $this->precio = $this->precio * $porcentaje;
        }

        public function vender(int $cantidad): bool
        {
            return $cantidad > $this->unidades ? true : false;
        }

        public function mostrarInformacion(): void
        {
            echo "Nombre: {$this->nombre}, precio: {$this->precio}, unidades: {$this->unidades}";
        }
    }

    // Crear productos

    $producto1 = new Producto("Teclado", 18.5, 8);
    $producto2 = new Producto("Ratón", 10.3, 2);

    // Probar métodos

    echo "INFO PRODUCTO: {$producto1->mostrarInformacion()}";
    saltodeLinea();
    echo "Valor total producto 1: {$producto1->calcularValor()}";
    saltodeLinea();
    echo "Descuento producto 1: {$producto1->aplicarDescuento(0.21)}";
    saltodeLinea();
    echo "Se pueden vender 20 productos 1: {$producto1->vender(20)}";

    $arrayProductos = [$producto1, $producto2];
    $totalInventario = 0;

    foreach ($arrayProductos as $i) {
        $totalInventario += $i->calcularValor();
    }

    saltodeLinea();
    echo "Valor total del inventario: {$totalInventario}";
    ?>
</body>

<body>
    <?php
    // Ejercicio 16: Clase Alumno y ordenación por nota

    class Alumno {
        
    }
    
    ?>
</body>


</html>