<?php
session_start();
if (empty($_POST)){ //si no llegamos por POST entonces volvemos al listado de productos
  header("Location: listadodeproductos.php");
  die();
}
require_once "classproducto.php";
$id_producto= filter_input(INPUT_POST, "id_producto");

$corpinio= filter_input(INPUT_POST, "corpinio");
$bombacha= filter_input(INPUT_POST, "bombacha");
$color= filter_input(INPUT_POST, "color");
$tela= filter_input(INPUT_POST, "tela");
$talle= filter_input(INPUT_POST, "talle");
$precio= filter_input(INPUT_POST, "precio");

if (is_null($id_producto)){
  //producto nueevo
  $producto= new Producto($corpinio, $bombacha, $color, $talle, $tela, $precio);
}
else {
  //producto existente
  $producto= Producto::getByID($id_producto);
  $producto-> setCorpinio($corpinio)
  ->setBombacha($bombacha)
  ->setColor($color)
  ->setTela($tela)
  ->setTalle($talle)
  ->setPrecio($precio);
}

Producto::guardar();

//vuelve al listado del producto
header("Location: listadodeproductos.php");
die();
