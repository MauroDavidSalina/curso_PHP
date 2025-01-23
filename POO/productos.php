<?php 

require "conexion.php";

class Productos extends Conexion {

    public function __construct()
    {
        parent::__construct();
    }

    public function getProductos(){

        $sql= "SELECT * FROM articulos_almacen ORDER BY nombre_articulo DESC";

        $query=$this->conexion->prepare($sql);
        $query->execute(array());
        $res=$query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        $this->conexion=null;
        return $res;
    }

}







?>