<?php 

    //variables de conexion
    $db_host="localhost";
    $db_database="usuarios";
    $db_user="root";
    $db_pass="";

    //conexion
    //$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
    $conexion= new mysqli($db_host, $db_user, $db_pass, $db_database);
    //por si falla la conexion a la base de datos
    if($conexion->connect_errno){
        echo "Error en la conexion a la base datos " . $conexion->connect_errno;
        exit();
    }
    //setea los caracteres utf-8
    //mysqli_set_charset($conexion,"utf-8");
    $conexion->set_charset("utf-8");
    //$query= "select * from datos_usuarios";
    $query= "SELECT id_articulo, nombre_articulo, precio_unitario FROM articulos_almacen ORDER BY id_articulo DESC";
    //consulta
    //$res=mysqli_query($conexion, $query);
    $res=$conexion->query($query);

    /*
    while($fila=mysqli_fetch_row($res)){
        for ($i=0; $i < count($fila); $i++) { 
            echo $fila[$i] . " ";
        }
        echo "<br>";
    };
    */
    while($fila=$res->fetch_assoc()){
        echo $fila["id_articulo"] . " ";
        echo $fila["nombre_articulo"] . " ";
        echo $fila["precio_unitario"] . " ";
        echo "<br>";
    }
    //cerrar la conexion
    //mysqli_close($conexion);
    $conexion->close();

?>