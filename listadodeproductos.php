<?php
  require_once 'plantillas_presentacion/cabecera.php';
 ?>
<h1>Listado de Productos</h1>
  <input class="btn btn-primary" type="submit" value="Agregar producto">
    <table class="tablero">
      <tr class="tablero tablero_lineas">
        <th>Id</th>
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
       <td><?php echo $producto->getId();?></td>
       <td><?php echo $producto->getCorpinio();?></td>
       <td><?php echo $producto->getBombacha(); ?></td>
       <td><?php echo $producto->getColor(); ?></td>
       <td><?php echo $producto->getTela(); ?></td>
       <td><?php echo $producto->getTalle(); ?></td>
       <td><?php echo $producto->getPrecio(); ?></td>
      <td>
       <input class="btn btn-secundary" type="submit" value="Modificar">
       <input class="btn btn-secundary" type="submit" value="Eliminar">
       <a href="verproducto.php?id=<?php echo $producto->getId();?>">
          <span class="glyphicon glyphicon-eye-open"></span>
       </a>
      </td>
     </tr>
<?php
 }
?>
  </table>



<?php
  require_once 'plantillas_presentacion/pie.php';
?>



<?php
//TAREA1: ponerlo bonito - HECHO
//TAREA2: agregar una columna que sea acciones, para cada producto debe decir modificar o eliminar (con botoncitos con bootstrap) -HECHO
//TAREA3: arriba y afuera de la tabla incluir un boton para agregar nuevos productos - HECHO
//TAREA4: crear archivo aparte que sea formulario de productos y hacer el formulario para cargar y subir cada cosa(bombacha, corpiñios, etc) con boton guardar
//TAREA5: llenar el formulario con el primer producto que esta en el getAll


 ?>
