<html>
<head> </head>
<body>
  <style>
   body {font-family: monospace;}
   </style>

<?php
//1TAREA HACER ROMBITO de "A"
$rombo = $_GET['rombo'];
 //primero imprimir espacios
for ($i = 0; $i < $rombo; $i++){
  for ($j = 0; $j < $rombo-$i; $j++) {
    echo "&nbsp;";
  }
//imprimir A
for ($a=0; $a < $i*2-1; $a++) {
 echo "A";
 }
echo "<br>";
}

//hacer el reversa
for ($g = $rombo; $g > 0 ; $g--) {
  for ($j = 0; $j < $rombo-$g; $j++) {
    echo "&nbsp;";
  }
  //imprimir V
  for ($a = 0; $a < $g*2-1 ; $a++) {
    echo "V";
  }
  echo "<br>";
}




/* tabla de traza
$rombo=5
para $i=5 necesito 5 espacios y una A
para $i=4 necesito 4 espacios y tres A
para $i=3 necesito 3 espacios y cinco A
para $i=2 necesito 2 espacios y siete A
para $i=1 necesito 1 espacios y nueve A
para $i=0 necesito 0 espacios y once A
luego en reversa

$rombo  $i  espacios  A
------------------------
  5     5      5      1
  5     4      4      3
  5     3      3      5
  5     2      2      7
  5     1      1      9
  5     0      0      11
  5     1      1      9
  5     2      2      7
  5     3      3      5
  5     4      4      3
  5     5      5      1



-----A
----AAA
---AAAAA
--AAAAAAA
-AAAAAAAAA
AAAAAAAAAAA
-AAAAAAAAA
--AAAAAAA
---AAAAA
----AAA
-----A

*/

?>
</body>
</html>
