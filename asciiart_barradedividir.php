<html>
<head> </head>
<body>
  <style>
  body {font-family: monospace;}
    </style>


<?php
$barra = $_GET['barra'];
$dividir= 3;
 //primero imprimir espacios
for ($i = 0; $i < $barra; $i++) {
  for ($j = 0; $j < $barra-$i ; $j++) {
    echo "&nbsp;";
  }
//imprimir barritas
for ($a = 0; $a < $dividir; $a++) {
  echo "/";
}
echo "<br>";
}





/* tabla de traza
$barra=6
para $i=6 necesito 6 espacios y tres barra dividir /
para $i=5 necesito 5 espacios y tres barra dividir /
para $i=4 necesito 4 espacios y tres barra dividir /
para $i=3 necesito 3 espacios y tres barra dividir /
para $i=2 necesito 2 espacios y tres barra dividir /
para $i=1 necesito 1 espacios y tres barra dividir /
para $i=0 necesito 0 espacios y tres barra dividir /

$barra  $i  espacios  /
------------------------
  6     6      6      3
  6     5      5      3
  6     4      4      3
  6     3      3      3
  6     2      2      3
  6     1      1      3
  6     0      0      3
*/


?>
</body>
</html>
