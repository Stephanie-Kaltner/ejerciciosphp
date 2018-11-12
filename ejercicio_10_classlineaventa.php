<?php

require_once 'ejercicio_10_classproducto.php';

class LineaVenta{

  private $cantidad;
  private $producto;
  private $importe;


function __construct($cantidad,Producto $producto){
   $this->cantidad = $cantidad;
   $this->producto = $producto;
   $this->calcularImporte();
}


function getCantidad(){
  return $this->cantidad;
}

function getProducto(){
  return $this->producto;
}

function getImporte(){
  return $this->importe;
}


public function setCantidad($cantidad){
  $this->cantidad = $cantidad;
}
 
public function setProducto(Producto $producto){
  $this->producto = $producto;
}

public function calcularImporte(){
  $this->importe = $this->cantidad*$this->producto->getPrecio();
}


}


echo "LINEA DE VENTA";
$lineaventa1= new LineaVenta(3, $conjunto4);
var_dump($lineaventa1);
echo "<br>";
var_dump($lineaventa1->getCantidad());
echo "<br>";
var_dump($lineaventa1->getProducto());
echo "<br>";
var_dump($lineaventa1->getImporte());
