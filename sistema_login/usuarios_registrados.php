<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados</title>
</head>
<body>
    <?php 
    session_start();

    if(!isset($_SESSION["user"])){
        header("location:login.php");
    }
    ?>
    <h1>Bienvenidos Usuarios</h1>
    <?php 
        echo "Hola: " .$_SESSION["user"] . "<br>"
    ?>
    <h2>Aca solo acceden los usuarios registrados</h2>
    <p><a href="usuarios_registrados1.php">Pagina 1</a></p>
    <p><a href="usuarios_registrados2.php">Pagina 2</a></p>
    <p><a href="usuarios_registrados3.php">Pagina 3</a></p>
    <p><a href="cerrar_session.php">Cerrar Sesion</a></p>
</body>
</html>