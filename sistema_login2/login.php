<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../sistema_login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container col-6 col-md-3 d-flex flex-column align-items-center py-4 bg-body-tertiary">
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>