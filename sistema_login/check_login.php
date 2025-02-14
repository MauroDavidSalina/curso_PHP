<?php 
require "../poo/config.php";
try {
    $conexion= new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_DATABASE . "; charset=utf8", DB_USER, DB_PASS);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    //$query="SELECT * FROM user_login WHERE User= ? AND Pass= ?";
    $query="SELECT * FROM user_login WHERE User= :user AND Pass= :pass";

    $user= htmlentities(addslashes($_POST["login"]));
    $pass= htmlentities(addslashes($_POST["password"]));

    $res=$conexion->prepare($query);

    //$res->bindParam(1, $user);
    //$res->bindParam(2, $pass);
    $res->bindValue("user", $user);
    $res->bindValue("pass", $pass);

    $res->execute();

    if ($res->rowCount()!=0) {
        //session_start();
        //$_SESSION["user"]= $user;
        $autenticado=true;
        if(isset($_POST["recordar"])){
            setcookie("nombre_usuario", $user, time()+86400);
        }
        //header("location:usuarios_registrados.php");
    }else{
        echo "Error. Usuario no registrado.";
        //header("location:login.php");
    }

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}


?>