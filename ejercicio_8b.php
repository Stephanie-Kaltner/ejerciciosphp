<html>
<head> </head>
<body>
  <style>
  body { font-family: monospace;}
  </style>


<?php
//1TAREA: imprimir una T (mayuscula)
$letra= $_GET['letra'];
$renglon = floor($letra/4);
for ($i=0; $i < $renglon; $i++) {
  for ($j=0; $j > $renglon*2; $j++) {
    echo "&nbsp;";
  }
  for ($a=0; $a < $renglon*3; $a++) {
    echo "|";
  }
  echo "<br>";
}
for ($b=0; $b < $renglon*2; $b++) {
  for ($c=0; $c < $renglon; $c++) {
    echo "&nbsp;";
  }
  for ($d=0; $d < $renglon; $d++) {
    echo "|";
  }
  echo "<br>";
}




/*
|||||||||||
|||||||||||
   ||||
   ||||
   ||||


/* tabla de traza
$letra=5
para $i=0 necesito 0 espacios y once |
para $i=1 necesito 0 espacios y once |
para $i=2 necesito 3 espacios y cuatro |
para $i=3 necesito 3 espacios y cuatro |
para $i=4 necesito 3 espacios y cuatro |


$cruz  $i  espacios  /
------------------------
 8     0      0      11
 8     0      0      11
 8     1      3      4
 8     2      3      4
 8     3      3      4

*/


?>
</body>
</html>
