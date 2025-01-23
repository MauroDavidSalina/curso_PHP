<?php 
    require "productos.php";
    $productos = new Productos();
    $arreglo_productos= $productos->getProductos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        foreach ($arreglo_productos as $producto) {
            echo $producto["id_articulo"] . " ";
            echo $producto["nombre_articulo"] . " ";
            echo $producto["descripcion"] . " ";
            echo $producto["categoria"] . " ";
            echo $producto["precio_unitario"] . " ";
            echo $producto["cantidad_en_inventario"] . " ";
            echo $producto["fecha_ingreso"] . " ";
            echo $producto["proveedor"] . " ";
            echo $producto["estado"] . " ";
            echo "<br>";
        }    
    ?>


</body>
</html>