<?php 
require "config.php";

class Conexion {

    protected $conexion;

    public function __construct()
    {
        //aca va la conexion con PDO
        try {
            $this->conexion = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_DATABASE . "; charset=utf8", DB_USER, DB_PASS);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conexion;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

}




?>