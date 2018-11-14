<?php
$nro=$_GET["numero"]; //valor por variable=> ?numero=5
for($i = 0; $i < $nro*2; $i++): //bucle que genera los renglones
  if ($i > $nro): //pregunta si es la segunda mitad del banderin
    //echo "i > nro <br>";
    for($j = 0; $j < $nro*2-$i; $j++):
    //for($j = $nro*2-$i; $j > 0; $j--){ //cantidad de renglones restantes nos dicen cuantas columnas imprimir
      //echo "1 ";
?> 1 <?php
    endfor;

  else : //primera mitad del banderin
    //echo "i < nro <br>";
  for($j = 0; $j < $i; $j++): //imprime las columnas
    //echo "1 " ;
?> 1 <?php
  endfor;
  endif;
  //echo "<br>"; //termina el renglon
?> <br>
<?php
endfor;

//for($j = 0; $j < $nro*2-$i; $j++){
?>


<?php
//1TAREA: hacer escalera de H -- HACER SI O SI
//3TAREA: piramide de barritas, base=> guiones; costado der=> barrita izq; costado izq=> barrita dividir; centro y punta=> barrita vertical
//4TAREA: hacer cubo de H
//5TAREA: despues del cubo de H sin esquinas, que estas sean guiones bajos 
