<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="negociolenceria.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <title>Luztela - Listado de productos</title>
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

<?php
 foreach (Producto::getAll() as $producto) {
?>
      <tr class="tablero tablero_lineas">
       <td><?php echo $producto->getCorpinio();?></td>
       <td><?php echo $producto->getBombacha(); ?></td>
       <td><?php echo $producto->getColor(); ?></td>
       <td><?php echo $producto->getTela(); ?></td>
       <td><?php echo $producto->getTalle(); ?></td>
       <td><?php echo $producto->getPrecio(); ?></td>
      <td>
       <input class="btn btn-secundary" type="submit" value="Modificar">
       <input class="btn btn-secundary" type="submit" value="Eliminar">
      </td>
     </tr>
<?php
 }
?>
  </table> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



<?php
//TAREA1: ponerlo bonito - HECHO
//TAREA2: agregar una columna que sea acciones, para cada producto debe decir modificar o eliminar (con botoncitos con bootstrap) -HECHO
//TAREA3: arriba y afuera de la tabla incluir un boton para agregar nuevos productos - HECHO
//TAREA4: crear archivo aparte que sea formulario de productos y hacer el formulario para cargar y subir cada cosa(bombacha, corpiñios, etc) con boton guardar
//TAREA5: llenar el formulario con el primer producto que esta en el getAll


 ?>
