<html>
<head> </head>
<body>
  <style>
  body{ font-family: monospace;}
    </style>

<?php

/*TAREA hacer una cruz +
n=3

----+++
----+++
----+++
+++++++++++
+++++++++++
+++++++++++
----+++
----+++
----+++  */

$cruz = $_GET ['cruz'];
$renglones = floor($cruz/3)+1;
//imprimir parte superior de la cruz
for ($i = 0; $i < $renglones; $i++) {
  for ($j=0; $j < $renglones; $j++) {
    echo "&nbsp;";
  }
  //imprimir las +
  for ($a = 0; $a < $renglones; $a++) {
    echo "+";
  }
  echo "<br>";
}

//imprimir centro de la cruz
for ($b=0; $b < $renglones; $b++) {
  for ($c=0; $c > $renglones; $c++) {
    echo "-";
  }
  for ($d=0; $d < $renglones*3; $d++) {
    echo "+";
  }
  echo "<br>";
}

//imprimir parte inferior de la cruz
for ($i=0; $i < $renglones; $i++) {
  for ($j=0; $j < $renglones; $j++) {
    echo "&nbsp;";
  }
  for ($a=0; $a < $renglones; $a++) {
    echo "+";
  }
  echo "<br>";
}






/* tabla de traza
$cruz=8
para $i=0 necesito 4 espacios y tres cruces
para $i=1 necesito 4 espacios y tres cruces
para $i=2 necesito 4 espacios y tres cruces
para $i=3 necesito 0 espacios y once cruces
para $i=4 necesito 0 espacios y once cruces
para $i=5 necesito 0 espacios y once cruces
para $i=6 necesito 4 espacios y tres cruces
para $i=7 necesito 4 espacios y tres cruces
para $i=8 necesito 4 espacios y tres cruces

$cruz  $i  espacios  /
------------------------
  8     0      4      3
  8     1      4      3
  8     2      4      3
  8     3      0      11
  8     4      0      11
  8     5      0      11
  8     6      4      3
  8     7      4      3
  8     8      4      3
*/

//0TAREA: $imprimirextramocruz, hacer una funcion para hacer ambos extremos de la cruz sin duplicar el codigo

//1TAREA: imprimir una T (mayuscula)
//2TAREA: imprimir una F (mayuscula)
//3TAREA: imprimir una E (mayuscula)
//4TAREA: imprimir una O (mayuscula) ==> puede ser cuadrada


?>
</body>
</html>
