<?php
$nombre = $_GET["nombre"];
echo "<h1>hola $nombre</h1>";
$a=5; //int
$b=2.5; //float
echo $a+$b;
$verdadero= true;
$falso= false;
if($nombre == "bjorn") { //condicional
  echo "hola bjorn";
} else if ($nombre == "luisa") {
  echo "hola luisa";
}
else if (!empty($nombre)) {
  echo "hola $nombre";
}
else{
  echo "mucho gusto";
}
for($i = 1; $i < 6; $i++){ //bucle for
  echo "\t <h{$i}>Hola</h{$i}> \n"; // caracter de tabulado y nueva linea
  echo $i;
}

switch($a){  //estrutura de control
  case 1:
   echo "vale 1";
   break;
  case 5:
   echo "vale 5";
   //break;
  default:
   echo "algo mas";
}
$j = 0;
while($j <= 10){
  echo " $j ";
  $j++;
}
echo "<br/>";
while ($j > 0){
  $j--;
  echo " $j ";
}
echo "<br/>";
do{
  echo " $j ";
  //$j++; //bucle infinito
} while ($j > 0);
