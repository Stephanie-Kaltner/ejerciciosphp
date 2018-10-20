<?php

class Cliente{

  const MODO_PAGO=array("Tarjeta", "Efectivo", "Transferencia");

private $nombre_apellido;
private $calle;
private $localidad;
private $codigo_postal;
private $pago;


function __construct($nombre_apellido, $calle, $localidad, $codigo_postal, $pago){
 $this-> nombre_apellido= $nombre_apellido;
 $this-> calle= $calle;
 $this-> localidad= $localidad;
 $this-> codigo_postal= $codigo_postal;
 $this-> pago= $pago;

}

function getNombre_apellido(){
  return $this->$nombre_apellido;
}

function getCalle(){
  return $this->$calle;
}

function getLocalidad(){
  return $this->$localidad;
}

function getCodigo_postal(){
  return $this->$codigo_postal;
}

function getPago(){
  return $this->$pago;
}

public function setPago($pago){
  if (in_array($pago, self::MODO_PAGO)){
    $this-> pago[]=$pago;
  }
  else {
    echo "Pago incorrecto: $pago";
  }
}



}





echo "CLIENTE 1: ";
$cliente1=new Cliente("Sebastian Colb", "Av. siempre viva 123", "Springfield", "1654", Cliente::MODO_PAGO[2]);
var_dump($cliente1);
echo "<br><br>";


echo "CLIENTE 2: ";
$cliente2=new Cliente("Claudia Glass", "Av. siempre viva 123", "Springfield", "1654", Cliente::MODO_PAGO[0]);
var_dump($cliente2);
echo "<br><br>";


echo "CLIENTE 3: ";
$cliente3=new Cliente("Av. siempre viva 123", "Springfield", "1654", Cliente::MODO_PAGO[1]);
var_dump($cliente3);
echo "<br><br>";
