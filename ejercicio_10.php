<?php
class Factura{

   const COLORES_POSIBLES= array("Rojo", "Blanco", "Negro", "Beige", "Rosa",
         "Anulares", "Floreado", "Azul", "Leopardo", "Verde agua", "Violeta");

   const MODELOS_CORPINIOS= array("Tasa soft", "Aro", "Triangulo", "Medio push up", "Push up", "Straples");

 private $corpinio;
 private $bombacha;
 private $color=array();
 private $talle;
 private $tela;
 private $precio;
 private $cantidad;
 private $total;


function __construct($corpinio, $bombacha, $color, $talle, $tela, $precio, $cantidad, $total){
  $this-> setCorpinio($corpinio);
  $this-> bombacha=$bombacha;
  $this-> setColor($color);
  $this-> talle=$talle;
  $this-> tela=$tela;
  $this-> precio=$precio;
  $this-> cantidad=$cantidad;
  $this-> total=$total;
}


function getCorpinio(){
  return $this->corpinio;
}
public function setCorpinio($corpinio){
  if(in_array($corpinio, self::MODELOS_CORPINIOS)){
    $this-> corpinio[] =$corpinio;
  }
}

function getBombacha(){
  return $this->bombacha;
}

function getColor(){
  return $this->color;
}

public function setColor($color){
  if(in_array($color, self::COLORES_POSIBLES)){
    $this-> color[] = $color;
  }
  else{
    echo "Color inesistente: $color";
  }
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

function getCantidad(){
  return $this->cantidad;
}

function getTotal(){
  return $this->total;
}



}


echo "CONJUNTO 1: ";
$conjunto1=new Factura(Factura::MODELOS_CORPINIOS[0], "Vedetina", Factura::COLORES_POSIBLES[3], "90", "Lycra", "$400", "1", "$400");
var_dump($conjunto1);
echo "<br><br>";

echo "CONJUNTO 2";
$conjunto2=new Factura(Factura::MODELOS_CORPINIOS[2], "Vedetinales", Factura::COLORES_POSIBLES[2], "100", "Lycra", "$300", "3", "$900");
var_dump($conjunto2);
echo "<br><br>";

echo "CONJUNTO 3";
$conjunto3=new Factura(Factura::MODELOS_CORPINIOS[1], "Culote", Factura::COLORES_POSIBLES[0], "95", "Encaje", "$260", "6", "$1560");
var_dump($conjunto3);
echo "<br><br>";


echo "CONJUNTO 4";
$conjunto4=new Factura(Factura::MODELOS_CORPINIOS[3], "Tanga", Factura::COLORES_POSIBLES[1], "85", "Encaje", "$280", "4", "$1680");
var_dump($conjunto4);
echo "<br><br>";
