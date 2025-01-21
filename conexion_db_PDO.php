<?php 
//variables de conexion
$db_host="localhost";
$db_database="usuarios";
$db_user="root";
$db_pass="";

//conexion
//$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
//$conexion= new mysqli($db_host, $db_user, $db_pass, $db_database);
try {
    
    $conexion= new PDO("mysql:host=$db_host; dbname=$db_database; charset=utf8", $db_user,$db_pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion OK<br>";
    //setea los caracteres utf-8
    $conexion->exec("SET NAMES 'utf8'"); //igual ya los setee en la conexion para usar emogis va utf8mb4
    //$query= "select * from datos_usuarios";
    //$query= "SELECT id_articulo, nombre_articulo, precio_unitario FROM articulos_almacen ORDER BY id_articulo DESC";
    $query= "SELECT id_articulo, nombre_articulo, precio_unitario FROM articulos_almacen WHERE categoria = ? ORDER BY id_articulo DESC";
    //consulta
    $res=$conexion->prepare($query);

    $res->execute(array("Alimentos"));

    while($fila=$res->fetch(PDO::FETCH_ASSOC)){
        echo $fila["id_articulo"] . " ";
        echo $fila["nombre_articulo"] . " ";
        echo $fila["precio_unitario"] . " ";
        echo "<br>";
    }

    $res->closeCursor();

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
} finally {
    $conexion=null;
}










?>