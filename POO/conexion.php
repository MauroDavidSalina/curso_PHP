<?php 
require "config.php";

class Conexion {

    protected $conexion;

    public function __construct()
    {
        //aca va la conexion con PDO
        try {

            $conexion= "mysql:host=" . DB_HOST . "; dbname=" . DB_DATABASE . "; charset=" . DB_CHARSET;
            $this->conexion = new PDO($conexion, DB_USER, DB_PASS);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $this->conexion;

        } catch (Exception $e) {

            die("Error: " . $e->getMessage());
            
        }
    }

}




?>