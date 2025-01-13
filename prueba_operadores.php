
<?php 

    if(isset($_POST["button"])){

        $valor1=$_POST["valor1"];
        $valor2=$_POST["valor2"];
        $operacion=$_POST["operacion"];

        calcular($operacion, $valor1, $valor2);
    }

    function calcular($operacion, $valor1, $valor2){
        /*
        switch ($operacion) {
            case 'Suma':
                echo "el resultado de la suma es: " . ($valor1 + $valor2);
                break;
            case 'Resta':
                echo "el resultado de la resta es: " . ($valor1 - $valor2);
                break;
            case 'Multiplicacion':
                echo "el resultado de la multiplicacion es: " . ($valor1 * $valor2);
                break;
            case 'Division':
                echo "el resultado de la division es: " . ($valor1 / $valor2);
                break;
            case 'Modulo':
                echo "el resultado del modulo es: " . ($valor1 % $valor2);
                break;   
        }
        */

        echo match ($operacion){
            'Suma' => "el resultado de la suma es: " . ($valor1 + $valor2),
            'Resta' => "el resultado de la resta es: " . ($valor1 - $valor2),
            'Multiplicacion' => "el resultado de la multiplicacion es: " . ($valor1 * $valor2),
            'Division' => "el resultado de la division es: " . ($valor1 / $valor2),
            'Modulo' => "el resultado del modulo es: " . ($valor1 % $valor2),
        };



    }




?>