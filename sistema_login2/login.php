<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../sistema_login/style.css">
</head>
<body>
    <?php 
        $autenticado=false;

        if(isset($_POST["enviar"])){
            include("../sistema_login/check_login.php");
        }
        
        //!isset($_SESSION["user"])

        if(!$autenticado && !isset($_COOKIE["nombre_usuario"])){
            include("form_login.html");
        }else{
           //include("usuarios_registrados.php");
           include("contenido_registrados.php");
        }
    ?>
    

</body>
</html>