<?php

class Venta{

  const MODELOS_POSIBLES=array("Tasa soft", "Aro", "Triangulo", "Medio push up", "Push up",
        "Straples", "Culote", "Vedetina", "Vedetinales", "Vedetina alta", "Culoteles", "Tanga", "Colales");


private $num_factura;
private $fecha;
private $cuit;
private $cantidad;
private $descripcion;
private $importe;
private $total;


function __construct($num_factura, $fecha, $cuit, $cantidad, $descripcion, $importe, $total){
  $this-> num_factura=$num_factura;
  $this-> fecha=$fecha;
  $this-> cuit=$cuit;
  $this-> cantidad=$cantidad;
  $this-> descripcion=$descripcion;
  $this-> importe=$importe;
  $this-> total=$total;
}

function getNum_factura(){
  return $this->$num_factura;
}

function getFecha(){
  return $this->$fecha;
}

function getCuit(){
  return $this->$cuit;
}

function getCantidad(){
  return $this->$cantidad;
}

function getDescripcion(){
  return $this->$descripcion;
}

function getImporte(){
  return $this->$importe;
}

function getTotal(){
  return $this->$total;
}



public function setDescripcion($descripcion){
  if (in_array($descripcion, self::MODELOS_POSIBLES)) {
    $this-> descripcion[]=$descripcion;
  }
  else {
    echo "Error modelo: $descripcion";
  }
}



}




echo "VENTA 1: ";
$venta1=new Venta("011", "10/9/18", "27-20202020-9", "2", Venta::MODELOS_POSIBLES[4], "$260", "$520");
var_dump($venta1);
echo "<br><br>";


echo "VENTA 2: ";
$venta2=new Venta("012", "12/9/18", "27-20202020-9", "10", Venta::MODELOS_POSIBLES[0], "$300", "$3000");
var_dump($venta2);
echo "<br><br>";


echo "VENTA 3: ";
$venta3=new Venta("013", "19/9/18", "27-20202020-9", "6", Venta::MODELOS_POSIBLES[8], "$100", "$600");
var_dump($venta3);
echo "<br><br>";
