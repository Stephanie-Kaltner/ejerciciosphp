<?php
  require_once 'plantillas_presentacion/cabecera.php';
  $id_producto= filter_input(INPUT_GET, 'id');
  $producto= Producto::getByID($id_producto);
?>

  <h1>Formulario de Producto</h1>
  <div id="producto">
    <form method="post" action="formularioproductos.php">

      <div class="renglon_formulario">
        <label for="corpinio" class="">Corpiño</label>
        <select name="corpinio" id="corpinio">
          <?php
            foreach (Producto::MODELOS_CORPINIOS as $modelo_corpinio){
              ?>
               <option value="<?php echo $modelo_corpinio; ?>"> <?php echo $modelo_corpinio; ?></option>
              <?php
            }
           ?>
        </select>
     </div>

      <div class="renglon_formulario">
        <label for="bombacha" class="">Bombacha</label>
        <input type="text" name="bombacha" id="bombacha"/>
     </div>

      <div class="renglon_formulario">
        <label for="color" class="">Color</label>
        <input type="text" name="color" id="color"/>
      </div>

      <div class="renglon_formulario">
        <label for="tela" class="">Tela</label>
        <input type="text" name="tela" id="tela"/>
      </div>

      <div class="renglon_formulario">
        <label for="talle" class="">Talle</label>
        <input type="text" name="talle" id="talle" value="<?php echo $producto->getTalle(); ?>"/>
      </div>

      <div class="renglon_formulario">
        <label for="precio" class="">Precio</label>
        <input type="text" name="precio" id="precio"/>
      </div>

      <select name="opcion">
        <option value="sumar">+</option>
        <option value="restar">-</option>
        <option value="multiplicar">*</option>
        <option value="dividir">/</option>
      </select>
      <input type="text" name="campo2"/> <br>
      <input type="submit" name="calcular" value="calcular"/>
    </form>


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



<?php
//TAREA1: cambiar bombacha y color por select
//TAREA2: para talle y precio, buscar y cambiar en html5 el tipo de campo de texto para talle un entero y para precio un float (dinero) number decimal currency
//TAREA3: poner bonito todo
//TAREA4: usar iconos de bootstrap 4
//TAREA5: para este formulaario cambiar boton de calcular por guardar
//TAREA6: que muestre los valores del producto dentro del formulario (hay que usar if y selected para los campitos de seleccion)
//TAREA7: acomodar las botoneras para que me lleven a la lista y eliminar y a ver 
 ?>
