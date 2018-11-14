<?php
//$abecedario = array('A','B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K' );
$abecedario= NULL;
$orden = filter_input(INPUT_GET, 'orden');
  if ($orden == 'A'){
    //que el abecedario empiece en la letra A
   $abecedario= range('A', 'Z');
  }
  //si no, si el $orden es = a Z, que el abecedario comience en la letra Z
  elseif ($orden == 'Z'){
    //que el abecedario comience en la letra Z
    $abecedario= range('Z', 'A');
  }
//$abecedario = range('Z', 'A');
var_dump($abecedario);

$busqueda=filter_input(INPUT_GET, 'letra');
echo "<p>Estamos buscando la letra: $busqueda</p>";

foreach ($abecedario as $indice => $letra){
  echo "<p>Entra en el bucle</p>";
   //var_dump($letra);
   echo "$letra<br>";
   if ($letra == $busqueda){
     echo "<p>Encontro la letra en el indice: $indice</p>";
     break;
   }
  echo "<p>Termina el bucle</p>";
}
  echo "<p>Fuera del bucle</p>";
//TAREA: que al final siempre quede el nombre TEF con indice
// si el $orden empieza con letra A, entonces deberia aparecer echo echo $abecedario[19].$abecedario[4].$abecedario[5];
if ($orden == 'A'){
  echo $abecedario[19].$abecedario[4].$abecedario[5];
}
// si el $orden empieza con letra Z, entonces deberia aparecer echo echo $abecedario[6].$abecedario[21].$abecedario[20];
elseif ($orden == 'Z') {
  echo $abecedario[6].$abecedario[21].$abecedario[20];
}
