<?php
//1TAREA: hacer escalera de H -- HACER SI O SI
$letra=$_GET["letra"]; //valor por variable=> ?numero=5
for($i = 0; $i < $letra*2; $i++): //bucle que genera los renglones
  if ($i > $letra): //pregunta si es la segunda mitad del banderin
    //echo "i > nro <br>";
    for($j = 0; $j < $letra*2-$i; $j++):
    //for($j = $nro*2-$i; $j > 0; $j--){ //cantidad de renglones restantes nos dicen cuantas columnas imprimir
      //echo "1 ";
    endfor;

  else : //primera mitad del banderin
    //echo "i < nro <br>";
  for($j = 0; $j < $i*2; $j++): //imprime las columnas
    //echo "1 " ;
?> H <?php
  endfor;
  endif;
  //echo "<br>"; //termina el renglon
?> <br>
<?php
endfor;

//for($j = 0; $j < $nro*2-$i; $j++){
?>
