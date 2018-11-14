<?php

require_once 'ejercicio_10_classlineaventa.php';

class Venta{

  const MODO_PAGO=array("Tarjeta", "Efectivo", "Transferencia");


private $num_factura;
private $fecha;
private $lineasventa = array();
private $total;
private $pago;

function __construct($num_factura, $fecha, $pago){
  $this->num_factura = $num_factura;
  $this->fecha = $fecha;
  $this->pago = $pago;
}

function getNum_factura(){
  return $this->num_factura;
}

function getFecha(){
  return $this->fecha;
}

function getTotal(){ //va a calcular el total sumando las lineas de venta
$total = 0;
foreach ($this->lineasVenta as $lv){ //recorremos el array $lineasventa con un bucle
  $total += $lv-> getImporte(); //el total se va a ir sumando a medida que recorremos (agreguemos) lineasVenta
}
return $total; //nos devuelve el total
}
 
function getPago(){
  return $this->pago;
}



public function setPago($pago){
  if(in_array($pago, self::MODO_PAGO)){
    $this-> pago[] = $pago;
  }
  else {
    echo "No pago: $pago";
  }
}


public function agregarLineaVenta($cantidad, Producto $producto){  //declara la funcion y dice cuantos parametros espera recibir
  if(is_int($cantidad)){  //comienza la validacion, pregunta si $cantidad es un entero
    $lineaventa = new LineaVenta($cantidad, $producto); //nuevo objeto de la clase LineaVenta, que se crea con esa cantidad de ese producto, se asigna
    $this->lineasVenta[] = $lineaventa; //se agrega al conjunto de LineasVenta que tiene esta venta
  }
  else {
    echo "cantidad invalida";
  }
}

}




echo "VENTA 1: ";
$venta1=new Venta("011", "10/9/18", Venta::MODO_PAGO[0]);
$venta1->agregarLineaVenta(2, $conjunto1);
$venta1->agregarLineaVenta(1, $conjunto3);
var_dump($venta1);
var_dump($venta1->getTotal());
echo "<br><br>";


echo "VENTA 2: ";
$venta2=new Venta("012", "12/9/18", Venta::MODO_PAGO[1]);
var_dump($venta2);
echo "<br><br>";


echo "VENTA 3: ";
$venta3=new Venta("013", "19/9/18", Venta::MODO_PAGO[2]);
var_dump($venta3);
echo "<br><br>";


//TAREA1 comentar cada linea del  metodo agregarLineaVenta explicando que hace HECHO
//TAREA2 modificar las creaciones de venta para que no lleven el importe ni la cantidad HECHO
//TAREA3 usar el metodo agregarLineaVenta para cargar 3 productos a la $venta1 HECHO
