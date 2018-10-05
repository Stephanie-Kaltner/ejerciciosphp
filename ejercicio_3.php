<html>
 <head>
 </head>

 <body>
   <?php
  $claves = null;
    if(!empty($_POST)){
     $claves = array_keys($_POST);
   } ?>

   <form method="post" >
     <input type= "text" name = "campo" />
     <input type= "submit" name= "enviar"/>
   </form>
  <form method="post" name="tablero">
   <?php
   for($i=0; $i<3; $i++){ //imprime los renglones del tablero
     for ($j=0; $j<4; $j++){ //imprime las columnas
    ?> <input type="submit" name="<?php $nombre= "campo_{$i}_{$j}"; echo $nombre; ?>" value="<?php if(in_array($nombre, $claves)){
      echo ".";
    } ?>"> <?php
     }
     ?> <br> <?php
   }
   ?>

  </form>
<?php
if(!empty($_POST)){
//$mensaje = obtener_mensaje($_POST['campo']);
//echo $mensaje;
var_dump($_POST);
}
?>
 </body>

</html>

<?php
function obtener_mensaje($texto){
  $mensaje = "hola ingresaste el siguiente texto: $texto";
  return $mensaje;
}
