<?php
 $confirmado= filter_input(INPUT_POST, "confirmado");
 if (is_null($confirmado)){
  require_once 'plantillas_presentacion/cabecera.php';
 ?>

<form method="post">
  <p>Está seguro de borrar este producto? </p>
  <input type="submit" name="confirmado" value="si"></input>
  <a href="listadodeproductos.php">NO</a>
</form>



 <?php
   require_once 'plantillas_presentacion/pie.php';
 }
 else {
   require_once 'classproducto.php';
   //1- traer el producto
   $producto= Producto::getByID(filter_input(INPUT_GET, "id"));
   //2- borrar el producto
   $producto-> borrar();
   //3- volver al listado
   header("Location: listadodeproductos.php");
   die();
 }

//TAREA 1: buscar popups de bootstrap
//TAREA 2: poner todo bonito
//TAREA 3: que los botones si y no sean iguales y sigan funcionando
//TAREA 4: agregar un campo de descripcion a producto y que siga funcionando

//SIGUIENTE CLASE: PERSISTENCIA EN BASE DE DATOS EN SQL
//BAJAR WORDPRESS
//VER CAKEPHP


 ?>
