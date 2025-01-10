<?php 

        // Declaracion de las funciones a utilizar
    function miFunction() {
        echo "Esto se ejecuta en la funcion<br>";
    }   
    
    $cont = 0;

    function incrementaValor(){
        global $cont;
        $cont++;
        echo "$cont <br>";
    }

    function incrementaValor2(){
        static $cont = 0;
        $cont++;
        echo "$cont <br>";
    }
?>