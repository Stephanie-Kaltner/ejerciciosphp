<html>
<head></head>
<body>
  <style>
  body{font-family: monospace;}
  </style>


<?php
//3TAREA: imprimir una E (mayuscula)
$letra= $_GET["letra"];
$renglon= floor($letra/4);
for ($i=0; $i < $renglon; $i++) {
  for ($j=0; $j < $renglon*2; $j++) {
    echo "|";
  }
  echo "<br>";
}

for ($a=0; $a < $renglon; $a++) {
  for ($b=0; $b < $renglon/2; $b++) {
    echo "|";
  }
  echo "<br>";
}

for ($i=0; $i < $renglon; $i++) {
  for ($j=0; $j < $renglon*2; $j++) {
    echo "|";
  }
  echo "<br>";
}

for ($a=0; $a < $renglon; $a++) {
  for ($b=0; $b < $renglon/2; $b++) {
    echo "|";
  }
  echo "<br>";
}
for ($i=0; $i < $renglon; $i++) {
  for ($j=0; $j < $renglon*2; $j++) {
    echo "|";
  }
  echo "<br>";
}


/*
|||||||||||
|||||||||||
||||
||||
|||||||||||
|||||||||||
||||
||||
|||||||||||
|||||||||||



/* tabla de traza
$letra=10
para $i=0 necesito 0 espacios y once |
para $i=1 necesito 0 espacios y once |
para $i=2 necesito 0 espacios y cuatro |
para $i=3 necesito 0 espacios y cuatro |
para $i=4 necesito 0 espacios y once |
para $i=5 necesito 0 espacios y once |
para $i=6 necesito 0 espacios y cuatro |
para $i=7 necesito 0 espacios y cuatro |
para $i=8 necesito 0 espacios y once |
para $i=9 necesito 0 espacios y once |


$cruz  $i  espacios  /
------------------------
 8     0      0      11
 8     1      0      11
 8     2      0      4
 8     3      0      4
 8     4      0      11
 8     5      0      11
 8     6      0      4
 8     7      0      4
 8     4      0      11
 8     5      0      11

*/



?>

</body>
</html>
