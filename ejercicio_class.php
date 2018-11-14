<?php
//variables de metodo vs propiedades de objetos

class A{

  private $a=15;
  private $b=25;

public function jugarConA($a){
  echo "esto es lo que recibimos: (muetra 35)";
var_dump($a); //muetra 35
echo "<br>";
echo "esto es lo que teniamos en el objeto: (muetra 15)";
var_dump($this->a); //muestra 15

$b=45;

$this->a = $a; //reemplaza 15 con 35
echo "<br>";
echo "esto es lo que tenemos ahora en el objeto: (muetra 35)";
var_dump($this->a); //muestra 35

$a=20;
echo "<br>";
echo "esto es lo que vale la variable interna: (muetra 20)";
var_dump($a); //muestra 20
echo "<br>";
 
echo "muetra 35";
var_dump($this->a); //muestra 35
echo "<br>";

echo "muetra 35";
$a=$this->a;
var_dump($a); //muestra 35
echo "<br>";

echo "muetra 35";
$this->a=40;
var_dump($a); //muestra 35
echo "<br>";

echo "muetra 40";
var_dump($this->a); //muestra 40
echo "<br>";

echo "muetra 35";
$this->a -= $a;
var_dump($a); //muestra 35
echo "<br>";

echo "muetra 5";
var_dump($this->a); //muestra 5
echo "<br>";

echo "muetra 60";
$a += $this->b; //suma 35+25 = 60
var_dump($a); //muestra 60
echo "<br>";

echo "muetra 5";
var_dump($this->a); //muestra 5
echo "<br>";

echo "muetra 25";
var_dump($this->b); //muestra 25
echo "<br>";

echo "muetra 45";
var_dump($b); //muestra 45
echo "<br>";

echo "muetra 25";
var_dump($this->b); //muestra 25
echo "<br>";

echo "muetra 70";
$this->a = $this->b + $b; //25+45
var_dump($this->a); //muestra 70
echo "<br>";


echo "-------------------------------------------------";

}



}


$a=35;
echo "esto es una variable de programa: ";
var_dump($a);
echo "<br>";

$objeto= new A();
$objeto->jugarConA($a);
var_dump($a); //muestra 35
