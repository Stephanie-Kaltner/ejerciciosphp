<html>
<head> </head>
<body>
 <style>
  body {font-family: monospace;}
</style>

<?php
/*2TAREA hacer rombito de "A" con barritas en los bordes, punta superior A e inferior V
primera mitad de A y segunda mitad con V y en el medio <----> */
$rombo = $_GET['rombo'];
//para $i=0 necesito 5 espacios y una A
for ($a = 0; $a < $rombo; $a++) {
  echo "&nbsp;";
}
echo "A<br>";

//$i empieza en 1 ($i=1) y tiene que ser menor que $rombo
for ($i = 1; $i < $rombo; $i++){
//imprime los espacios
  for ($j=0; $j < $rombo-$i; $j++) {
    echo "&nbsp;";
  }
   //imprime barrita dividir
  echo "/";

  //imprime A $i*2-1
for ($b = 0; $b < $i*2-1; $b++) {
  echo "A";
}
  //imprime barrita invertida
  echo '\<br>';
}
echo "<";
//para $i=5 necesito 0 espacios, una '<', nueve guiones - y una ">"
for ($c = 0; $c < $i*2-1 ; $c++) {
  echo "-";
}
echo '><br>';

//hacer todo en reversa
for ($k = $rombo; $k > 0; $k--) {
  //imprimir los espacios
  for ($j = 0; $j < $rombo-$k; $j++) {
    echo "&nbsp;";
  }
  //imprime barrita inversa
echo '\\';

//imprime V
for ($b = 0; $b < $k*2-1 ; $b++) {
  echo "V";
}
//imprime barrita dividir
echo "/<br>";
}
for ($a = 0; $a < $rombo; $a++) {
  echo "&nbsp;";
}
echo "V<br>";




?>



<?php

/*
traza del programa
$rombo=5
para $i=0 necesito 5 espacios y una A
para $i=1 necesito 4 espacios y una barra dividir, una A y una invertida /A\
para $i=2 necesito 3 espacios y una barra dividir, tres A y una invertida /AAA\
para $i=3 necesito 2 espacios y una barra dividir, cinco A y una invertida /AAAAA\
para $i=4 necesito 1 espacio y una barra dividir, siete A y una invertida /AAAAAAA\
para $i=5 necesito 0 espacios, una "<", nueve guiones --------- y una ">"


Tabla de traza
$rombo  $i  $espacios  "A"  "/"  "\"  "<"  "-"  ">"
---------------------------------------------------
 5      0       5      1
 5      1       4      1    1     1
 5      2       3      3    1     1
 5      3       2      5    1     1
 5      4       1      7    1     1
 5      5       1      0    0     0   1    9     1
 5      4       1      7    1     1
 5      3       2      5    1     1
 5      2       3      3    1     1
 5      1       4      1    1     1
 5      0       5      1V


ASCII art
-----A
----/A\
---/AAA\
--/AAAAA\
-/AAAAAAA\
<--------->
-\AAAAAAA/
--\AAAAA/
---\AAA/
----\A/
-----V
*/
