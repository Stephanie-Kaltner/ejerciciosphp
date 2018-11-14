<?php

class Cliente{

private $nombre_apellido;
private $calle;
private $localidad;
private $codigo_postal;
private $cuit;

function __construct($nombre_apellido, $calle, $localidad, $codigo_postal, $cuit){
 $this->nombre_apellido = $nombre_apellido;
 $this->calle = $calle;
 $this->localidad = $localidad;
 $this->codigo_postal = $codigo_postal;
 $this->cuit = $cuit;
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
 
function getCuit(){
  return $this->$cuit;
}


}





echo "CLIENTE 1: ";
$cliente1=new Cliente("Sebastian Colb", "Calle falsa 123", "Springfield", "1654", "27-20202020-9");
var_dump($cliente1);
echo "<br><br>";


echo "CLIENTE 2: ";
$cliente2=new Cliente("Claudia Glass", "Av. siempre viva 742", "Springfield", "1654", "27-20202020-9");
var_dump($cliente2);
echo "<br><br>";


echo "CLIENTE 3: ";
$cliente3=new Cliente("Mariano Galh", "Av. siempre viva 123", "Springfield", "1654", "27-20202020-9");
var_dump($cliente3);
echo "<br><br>";
