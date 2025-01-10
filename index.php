<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php 
        echo "Prueba PHP luego de cambiar carpeta de ejecucion del servidor<br>" ;

    ?>
    <?php 
        // codigo de prueba
        include "funciones.php";
        print "Bienvenidos al curso PHP <br>";
        print "primeras pruebas inyectando etiquetas de salto de lines <br>";
        print "Otro texto<br>";

        $nombre = "Mauro";
        $edad = 39;
        print "Mi nombre es $nombre y tengo $edad años.<br>";
        echo "Mi nombre es $nombre y tengo $edad años.<br>";
        miFunction();
        incrementaValor();
        incrementaValor();
        incrementaValor();
        incrementaValor();
        incrementaValor2();
        incrementaValor2();
        incrementaValor2();
        incrementaValor2();

        $texto1 ="Casa";
        $texto2 ="CASA";

        $resultado = strcmp($texto1,$texto2);
        $resultado = strcasecmp($texto1,$texto2);
        echo "$resultado";

        
    ?>

</body>
</html>