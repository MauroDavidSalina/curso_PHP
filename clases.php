<?php 

class Vehiculo {
    /*private int $ruedas;
    private string $color;
    private int $motor;

    function __construct($color, $motor){
        $this->ruedas= 4;
        $this->color=$color;
        $this->motor=$motor;
    }*/

    public function __construct(
        protected string $color,
        protected int $ruedas,
    ){}



    
    public function getRuedas(){
        return $this->ruedas;
    }
    public function setRuedas($nvo_ruedas){
        $this->color= $nvo_ruedas;
    }

    public function acelerar(){
        echo "estoy acelerando<br>";
    }

    public function frenar(){
        echo "estoy frenando<br>";
    }

    public function girar(){
        echo "estoy girando<br>";
    }


}

class Bicleta extends Vehiculo {
    public function __construct(
        private $tipo,
        string $color,
        int $ruedas
    ){
        parent::__construct($color,$ruedas);
     }

    public function getTipo(){
        return $this->tipo;
    }
    public function settipo($nvo_tipo){
        $this->tipo= $nvo_tipo;
    }

    function frenar()
    {
        echo "Dejo de pedalear";
    }

}

class Coche extends Vehiculo {
    /*private int $ruedas;
    private string $color;
    private int $motor;

    function __construct($color, $motor){
        $this->ruedas= 4;
        $this->color=$color;
        $this->motor=$motor;
    }*/

    public function __construct(
        private int $motor,
        string $color,
        int $ruedas
    ){
        parent::__construct($color,$ruedas);
    }

    public function getColor(){
        return $this->color;
    }
    public function setColor($nvo_color){
        $this->color= $nvo_color;
    }

    public function getMotor(){
        return $this->motor;
    }
    public function setMotor($nvo_motor){
        $this->motor= $nvo_motor;
    }

    public function acelerar(){
        parent::acelerar();
        echo "estoy acelerando el auto<br>";
    }

}



$ford = new Coche(1500,"Blanco",4);

$chevrolet = new Coche(1000,"Azul",4);

$ford->frenar();

echo $ford->getColor();


?>