<?php
//TAREA4: crear archivo aparte que sea formulario de productos y hacer el formulario para cargar y subir cada cosa(bombacha, corpiñios, etc) con boton guardar
//TAREA5: llenar el formulario con el primer producto que esta en el getAll
 ?>
<!doctype html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="negociolenceria.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

   <title>Formulario de productos</title>
 </head>
 <body>
 <?php
 require_once "ejercicio_10_classproducto.php";
 ?>
 
 <h1>Listado de Productos</h1>
 <input class="btn btn-primary" type="submit" value="Agregar producto">
   <table class="tablero">
     <tr class="tablero tablero_lineas">
       <th>Corpiño</th>
       <th>Bombacha</th>
       <th>Color</th>
       <th>Tela</th>
       <th>Talle</th>
       <th>Precio</th>
       <th>Botones</th>
     </tr>
