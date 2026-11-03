<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Claude</title>
</head>

<body>
    <?php
    $inventario = [
        "teclado"  => ["precio" => 25.50,  "unidades" => 10, "categoria" => "perifericos"],
        "raton"    => ["precio" => 15.00,  "unidades" => 0,  "categoria" => "perifericos"],
        "monitor"  => ["precio" => 150.00, "unidades" => 5,  "categoria" => "pantallas"],
        "webcam"   => ["precio" => 40.00,  "unidades" => 8,  "categoria" => "perifericos"],
        "portatil" => ["precio" => 899.99, "unidades" => 2,  "categoria" => "ordenadores"],
    ];

    function valorTotal(array $inv): float
    {
        $total = 0;
        foreach ($inv as $i => $datos) {
            $total += ($datos["precio"] * $datos["unidades"]);
        }

        return $total;
    }

    function sinStock(array $inv): array
    {
        return array_keys(array_filter($inv, fn($i) => $i["unidades"] === 0));
    }

    function masValioso(array $inv): string {
        $nombreMayor = "";
        $mayor = PHP_INT_MIN;
        foreach($inv as $i => $datos) {
            if($mayor < $datos["precio"] * $datos["unidades"]) {
                $mayor = $datos["precio"] * $datos["unidades"];
                $nombreMayor = $i;
            }
        }

        return $nombreMayor;
    }

    function porCategoria(array $inv): array {
        $resultado = [];

        foreach($inv as $i => $datos) {
            $categoria = $datos["categoria"];

            $resultado[$categoria][] = $i;
        }

        return $resultado;
    }

    function vender(array &$inv, string $producto, int $cantidad)
    {
        if (!($inv[$producto])) {
            throw new Exception("Producto no existe");
        } elseif ($inv[$producto]["unidades"] < $cantidad) {
            return false;
        }

        $inv[$producto]["unidades"] -= $cantidad;

        return true;
    }

    function aplicarDescuento(array $inv, float $porcentaje): array
    {
        return array_map(fn($i) => round($i["precio"] * (1 - ($porcentaje / 100)), 2), $inv);
    }


    echo "Valor total: " . number_format(valorTotal($inventario), 2, ",", ".") . "€";
   
    echo("Sin stock: ");
    print_r(sinStock($inventario));

    echo "Más valioso: " . masValioso($inventario);

    echo "Categoriía: ";
    print_r(porCategoria($inventario));

    
   ?>
</body>

</html>