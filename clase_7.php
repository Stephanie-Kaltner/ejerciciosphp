<?php
class Auto{
  //propiedades
  private $volante = 1;
  private $ruedas = 4;
  private $asientos = 4;
  private $puertas;
  private $motor = 1;
  private $inyector = 1;
  private $estado;
  private $velocidad;
  private $color;

//constructor (no son obligatorios, pero si no se agregan )
function __construct($color, $puertas){
  //crea el objeto y donde se inicia el objeto, le da el valor inicial a sus propiedades
  $this -> estado = "apagado";
  $this -> velocidad = 0;
  $this -> color = $color;
  $this -> puertas = $puertas;
}

  //metodos
    function arrancar($llave){
      //comportamientos
      //si la llave corresponde a este auto, le manda nafta al inector y arranca el motor
      $this -> estado = "encendido";
    }
    function acelerar(){
      $this -> velocidad += 15;
    }
    function frenar(){
      $this -> velocidad -= 15;
    }
    function getColor(){
      return $this->color;
    }
    function setColor($color){
      if ($color=="blanco"){
        $this -> color = $color;
      }

    }
}

$auto = new Auto("rojo", 3);
var_dump($auto);
echo "<br>";


var_dump($auto-> getColor());
$auto -> setColor("blanco");
echo "<br>";
var_dump($auto-> getColor());
