<?php 

require "conexion.php";

class Productos extends Conexion {
    
    //esto solo tiene sentido si el constructor hace algo adicional
    //public function __construct()
    //{
    //    parent::__construct();
    //    //aca podria hacer algo adicional
    //}

    public function getProductos(){

        $sql= "SELECT * FROM articulos_almacen ORDER BY nombre_articulo DESC";
        
        //si la consulta es compleja y requiere parametros que deben validarse
        //es mas seguro y evita sql inyection
        //$query=$this->conexion->prepare($sql);
        //$query->execute(array());
        //si la consulta es simple, sin parametro para validar
        $query=$this->conexion->query($sql);

        //desde aca se guarda el resultado de la consulta en un array
        //si no fuese una consulta que trae resultado no va
        $res=$query->fetchAll(PDO::FETCH_ASSOC);
        //libera el cursor para poder hacer otras consultas
        $query->closeCursor();
        //libera la conexion pero en este caso para poder hacer otras consultas
        //se deberia volver a crear un objeto de la clase productos
        $this->conexion=null;
        return $res;
    }

}
?>