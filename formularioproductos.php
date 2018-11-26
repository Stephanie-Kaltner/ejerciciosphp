<?php
  require_once 'plantillas_presentacion/cabecera.php';
  $id_producto= filter_input(INPUT_GET, 'id');
  if (!is_null($id_producto)){
  $producto= Producto::getByID($id_producto);
  }
?>

<h1>Formulario de Producto</h1>
  <div id="producto">
    <form method="post" action="guardarproducto.php"> <?php //el action queda vacio para que siempre vuelva a la url donde se ejecuto el formulario ?>
<?php if (isset($producto)){
  ?>
  <input type="hidden" name="id_producto" value="<?php echo $id_producto; ?>">
  <?php
} ?>
      <div class="renglon_formulario">
        <label for="corpinio" class="">Corpiño</label>
        <select name="corpinio" id="corpinio">
          <?php
           if(isset($producto)){
           $corpinio= $producto->getCorpinio();
           }
            foreach (Producto::MODELOS_CORPINIOS as $modelo_corpinio){
          ?>
           <option value="<?php echo $modelo_corpinio; ?>" <?php echo ((isset($producto)&&($corpinio == $modelo_corpinio))?"selected":""); ?>> <?php echo $modelo_corpinio; ?></option>
          <?php
            }
          ?>
        </select>
     </div>

      <div class="renglon_formulario">
        <label for="bombacha" class="">Bombacha</label>
        <select name="bombacha" id="bombacha">
        <?php
         foreach (Producto::MODELOS_BOMBACHAS as $modelo_bombacha){
        ?>
        <option value="<?php echo $modelo_bombacha;?>" <?php echo ((isset($producto)&&($producto->getBombacha()==$modelo_bombacha))?"selected":""); ?>> <?php echo $modelo_bombacha;?> </option>
        <?php
         }
        ?>
      </select>
     </div>

    <div class="renglon_formulario">
       <label for="color" class="">Color</label>
       <select name="color" id="color">
       <?php
        foreach (Producto::COLORES_POSIBLES as $color_posible){
        ?>
        <option value="<?php echo $color_posible;?>" <?php echo ((isset($producto)&&($producto->getColor()==$color_posible))?"selected":"")?>><?php echo $color_posible;?></option>
        <?php
        }
       ?>
     </select>
      </div>

     <div class="renglon_formulario">
        <label for="tela" class="">Tela</label>
        <select name="tela" id="tela">
          <?php
           foreach (Producto::TELAS_POSIBLES as $tela_posible){
           ?>
            <option value="<?php echo $tela_posible;?>" <?php echo ((isset($producto)&&($producto->getTela()==$tela_posible))?"selected": "")?>> <?php echo $tela_posible;?> </option>
           <?php
           }
          ?>
        </select>
      </div>

      <div class="renglon_formulario">
        <label for="talle" class="">Talle</label>
        <select name="talle" id="talle">
          <?php
           foreach (Producto::TALLES_POSIBLES as $talle_posible){
          ?>
          <option value="<?php echo $talle_posible;?>" <?php echo((isset($producto)&&($producto->getTalle()==$talle_posible))?"selected":"")?> > <?php echo $talle_posible;?> </option>
          <?php
           }
          ?>
        </select>
      </div>

      <div class="renglon_formulario">
        <label for="precio" class="">Precio</label>
        <input type="number" step="0.01" name="precio" id="precio" value="<?php echo (isset($producto)? $producto->getPrecio(): ""); ?>"/>
      </div>

      <div id="botonera">
        <a href="listadodeproductos.php">
        <i class="fas fa-list"></i>
        </a>
        <?php
        if (isset($producto)){
        ?>
        <a href="formularioproductos.php?id=<?php echo $producto->getId();?>">
         <i class="far fa-edit"></i>
        </a>

        <a href="eliminarproducto.php?id=<?php echo $producto->getId();?>">
         <i class="far fa-trash-alt"></i>
        </a>
        <?php
        }
        ?>
         <input class="btn btn-secundary" type="submit" value="Guardar">
      </div>



    </form>


  </div>




<?php
  require_once 'plantillas_presentacion/pie.php';
?>



<?php
//TAREA1: cambiar bombacha y color por select / HECHO
//TAREA2: para talle y precio, buscar y cambiar en html5 el tipo de campo de texto para talle un entero y para precio un float (dinero) number decimal currency HECHO
//TAREA3: poner bonito todo
//TAREA4: usar iconos de bootstrap 4 / HECHO
//TAREA5: para este formulaario cambiar boton de calcular por guardar / HECHO
//TAREA6: que muestre los valores del producto dentro del formulario (hay que usar if y selected para los campitos de seleccion) / HECHO
//TAREA7: acomodar las botoneras para que me lleven a la lista y eliminar y a ver / HECHO

//NUEVAS TAREAS
//TAREA1: mandar bien el talle y la Tela / YA NI SE
//TAREA2: en el listadodeproductos.php usar los productos que vienen en la session en lugar de getAll (queda para despues)

//CLase Lunes: persistencia no SQL (json, csv)

 ?>
