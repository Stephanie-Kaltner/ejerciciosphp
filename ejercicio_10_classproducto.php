<?php
//Tarea: archivo aparte, hacer un universo de facturacion, clase: venta, clase: cliente, clase: producto, PARA EL LUNES
class Producto{

   const COLORES_POSIBLES= array("Rojo", "Blanco", "Negro", "Beige", "Rosa", "Anulares",
         "Floreado", "Azul", "Leopardo", "Verde agua", "Violeta", "Salmon", "Gris");

   const MODELOS_CORPINIOS= array("Tasa soft", "Aro", "Triangulo", "Medio push up", "Push up", "Straples");

   const MODELOS_BOMBACHAS= array("Culote", "Vedetina", "Vedetinales", "Vedetina alta", "Culoteles", "Tanga", "Colales");
//porque linea verde?

 private $corpinio;
 private $bombacha;
 private $color=array();
 private $talle;
 private $tela;
 private $precio;


function __construct($corpinio, $bombacha, $color, $talle, $tela, $precio){
  $this-> setCorpinio($corpinio);
  $this-> bombacha=$bombacha;
  $this-> setColor($color);
  $this-> talle=$talle;
  $this-> tela=$tela;
  $this-> precio=$precio;
//porque tiene una barrita color beigenaranja y porque hay un triangulo rojo?
}


function getCorpinio(){
  return $this->corpinio;
}

function getBombacha(){
  return $this->bombacha;
}

function getColor(){
  return $this->color;
}

function getTalle(){
  return $this->talle;
}

function getTela(){
  return $this->tela;
}

function getPrecio(){
  return $this->precio;
}



public function setCorpinio($corpinio){
  if(in_array($corpinio, self::MODELOS_CORPINIOS)){
    $this-> corpinio[] =$corpinio;
  }
}

public function setColor($color){
  if(in_array($color, self::COLORES_POSIBLES)){
    $this-> color[] = $color;
  }
  else{
    echo "Color inesistente: $color";
  }
}



}


echo "CONJUNTO 1: ";
$conjunto1=new Producto(Producto::MODELOS_CORPINIOS[0], Producto::MODELOS_BOMBACHAS[1], Producto::COLORES_POSIBLES[3], "90", "Lycra", "$400");
var_dump($conjunto1);
echo "<br><br>";

echo "CONJUNTO 2";
$conjunto2=new Producto(Producto::MODELOS_CORPINIOS[2], Producto::MODELOS_BOMBACHAS[2], Producto::COLORES_POSIBLES[2], "100", "Lycra", "$300");
var_dump($conjunto2);
echo "<br><br>";

echo "CONJUNTO 3";
$conjunto3=new Producto(Producto::MODELOS_CORPINIOS[1], Producto::MODELOS_BOMBACHAS[0], Producto::COLORES_POSIBLES[0], "95", "Encaje", "$260");
var_dump($conjunto3);
echo "<br><br>";


echo "CONJUNTO 4";
$conjunto4=new Producto(Producto::MODELOS_CORPINIOS[3], Producto::MODELOS_BOMBACHAS[5], Producto::COLORES_POSIBLES[1], "85", "Encaje", "$280");
var_dump($conjunto4);
echo "<br><br>";
