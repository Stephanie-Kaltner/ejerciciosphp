<html>
<head> </head>
<body>
 <style>
   body {font-family: monospace;}
 </style>

<?php
//2TAREA: hacer piramde de H
$H= $_GET["H"];
for ($i = 0; $i < $H; $i++) {
  for ($j = 0; $j < $H-$i-1; $j++) {
    echo "&nbsp;";
  }
  for ($j = 0; $j < $i*2+1; $j++) {
    echo "H";
  }
  echo "<br>";
}

?>

</body>
</html>





<?php
/*
_____H_____
____HHH____
___HHHHH___
__HHHHHHH__
_HHHHHHHHH_
HHHHHHHHHHH

*/


/*for($i = 0; $i < $H*2; $i++): //bucle que genera los renglones
  if ($i > $H): //pregunta si es la segunda mitad del banderin
    //echo "i > nro <br>";
    for($j = 0; $j < $H*2-$i; $j++):
    //for($j = $nro*2-$i; $j > 0; $j--){ //cantidad de renglones restantes nos dicen cuantas columnas imprimir
      //echo "1 ";
?> H <?php
    endfor;

  else : //primera mitad del banderin
    //echo "i < nro <br>";
  for($j = 0; $j < $i; $j++): //imprime las columnas
    //echo "1 " ;
?> H <?php
  endfor;
  endif;
  //echo "<br>"; //termina el renglon
?> <br>
<?php
endfor;

//for($j = 0; $j < $nro*2-$i; $j++){
//usar los mismos bucles que el banderin de H*/
?>
