<?php 

    //variables de conexion
    $db_host="localhost";
    $db_database="usuarios";
    $db_user="root";
    $db_pass="";

    //conexion
    $conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
    //por si falla la conexion a la base de datos
    if(mysqli_connect_errno()){
        echo "Error en la conexion a la base datos";
        exit();
    }

    //setea los caracteres utf-8
    mysqli_set_charset($conexion,"utf-8");
    //$query= "select * from datos_usuarios";
    $query= "SELECT id_articulo, nombre_articulo, precio_unitario FROM articulos_almacen";
    //consulta
    $res=mysqli_query($conexion, $query);

    /*
    while($fila=mysqli_fetch_row($res)){
        for ($i=0; $i < count($fila); $i++) { 
            echo $fila[$i] . " ";
        }
        echo "<br>";
    };
    */
    while($fila=mysqli_fetch_assoc($res)){
        echo $fila["id_articulo"] . " ";
        echo $fila["nombre_articulo"] . " ";
        echo $fila["precio_unitario"] . " ";
        echo "<br>";
    }
    //cerrar la conexion
    mysqli_close($conexion);



?>