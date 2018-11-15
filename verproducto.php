<?php
require_once 'plantillas_presentacion/cabecera.php';
$id_producto= filter_input(INPUT_GET, 'id');
$producto= Producto::getByID($id_producto);
 ?>

<h1>Vista de Producto</h1>
<div id="vista_producto">
  <p>ID: <?php echo $producto->getId();?></p>
  <p>Corpiño: <?php echo $producto->getCorpinio();?></p>
  <p>Bombacha: <?php echo $producto->getBombacha(); ?></p>
  <p>Color: <?php echo $producto->getColor(); ?></p>
  <p>Tela: <?php echo $producto->getTela(); ?></p>
  <p>Talle: <?php echo $producto->getTalle(); ?></p>
  <p>Precio: <?php echo $producto->getPrecio(); ?></p>
</div>

<div id="botonera">
  <a href="listadodeproductos.php">
     <span class="glyphicon glyphicon-list"></span>
  </a>

  <a href="formularioproductos.php?id=<?php echo $producto->getId();?>">
     <span class="glyphicon glyphicon-pencil"></span>
  </a>

  <a href="eliminarproducto.php?id=<?php echo $producto->getId();?>">
     <span class="glyphicon glyphicon-trash"></span>
  </a>

</div>



<?php
  require_once 'plantillas_presentacion/pie.php';
?>
