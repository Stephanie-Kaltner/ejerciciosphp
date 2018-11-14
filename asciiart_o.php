<html>
<head> </head>
<body>
  <style>
  body{font-family: monospace;}
  </style>

<?php
$letra = $_GET["letra"];
$renglon= floor($letra/3);
//para $i=0 e $i=1 necesito 0 espacios y quince |
for ($i=0; $i < $renglon; $i++) {
  for ($j=0; $j < $renglon*4; $j++) {
    echo "|";
  }
  echo "<br>";
}

//para $i=2 al $i=7 necesito 0 espacios, cuatro |, siete espacios y cuatro |
for ($a=0; $a < $renglon*2; $a++) {
  for ($b=0; $b < $renglon; $b++) {
    echo "|";
  }
  for ($c=0; $c < $renglon*2; $c++) {
    echo "&nbsp;";
  }
  for ($d=0; $d < $renglon; $d++) {
    echo "|";
  }

echo "<br>";
}


//para $i=8 e $i=9 necesito 0 espacios y quince |
for ($i=0; $i < $renglon; $i++) {
  for ($j=0; $j < $renglon*4; $j++) {
    echo "|";
  }
  echo "<br>";
}




/*
|||||||||||||||
|||||||||||||||
||||       ||||
||||       ||||
||||       ||||
||||       ||||
||||       ||||
||||       ||||
|||||||||||||||
|||||||||||||||



/* tabla de traza
$letra=10
para $i=0 necesito 0 espacios y quince |
para $i=1 necesito 0 espacios y quince |
para $i=2 necesito 0 espacios, cuatro |, siete espacios y cuatro |
para $i=3 necesito 0 espacios, cuatro |, siete espacios y cuatro |
para $i=4 necesito 0 espacios, cuatro |, siete espacios y cuatro |
para $i=5 necesito 0 espacios, cuatro |, siete espacios y cuatro |
para $i=6 necesito 0 espacios, cuatro |, siete espacios y cuatro |
para $i=7 necesito 0 espacios, cuatro |, siete espacios y cuatro |
para $i=8 necesito 0 espacios y quince |
para $i=9 necesito 0 espacios y quince |


$cruz  $i  espacios  |    espacios  |
-------------------------------------
 8     0      0      15      0      0
 8     1      0      15      0      0
 8     2      0      4       7      4
 8     3      0      4       7      4
 8     4      0      4       7      4
 8     5      0      4       7      4
 8     6      0      4       7      4
 8     7      0      4       7      4
 8     4      0      15      0      0
 8     5      0      15      0      0

*/


?>
</body>
</html>
