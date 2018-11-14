<html>
<head> </head>
<body>
  <style>
    body {font-family: monospace;}
  </style>

<?php
//3TAREA: piramide de barritas, base=> guiones; costado der=> barrita izq; costado izq=> barrita dividir; centro y punta=> barrita vertical
$pir= $_GET["numero"]; //valor por variable=> ?numero=5
//para $i=0 necesito 5 espacios y una barra vertical |
for ($m = 0; $m < $pir; $m++) {
  echo "&nbsp;";
}
echo "|<br>";

//$i empieza en 1 ($i=1) y tiene que ser menor que $pir
for ($i = 1; $i < $pir; $i++){
//imprime los espacios
  for ($j=0; $j < $pir-$i; $j++) {
    echo "&nbsp;";
  }
   //imprime barrita dividir
  echo "/";

  //imprime barrita vertical $i*2-1
for ($d = 0; $d < $i*2-1; $d++) {
  echo "|";
}
  //imprime barrita invertida
  echo '\<br>';
}
echo "/";
//para $i=5 necesito 0 espacios y nueve guiones _________
for ($b = 0; $b < $i*2-1 ; $b++) {
  echo "_";
}
echo '\<br>';
?>

</body>
</html>


<?php



/*
traza del programa
$pir=5
para $i=0 necesito 5 espacios y una barra vertical |
para $i=1 necesito 4 espacios y una barra dividir, una vertical y una invertida /|\
para $i=2 necesito 3 espacios y una barra dividir, tres vertical y una invertida /|||\
para $i=3 necesito 2 espacios y una barra dividir, cinco vertical y una invertida /|||||\
para $i=4 necesito 1 espacio y una barra dividir, siete vertical y una invertida /|||||||\
para $i=5 necesito 0 espacios y once guiones ----------- (bajos)


Tabla de traza
$pir  $i  $espacios  "/"   "|"   "\"
------------------------------------
 5    0       5      0      1     0
 5    1       4      1      1     1
 5    2       3      1      3     1
 5    3       2      1      5     1
 5    4       1      1      7     1
 5    5       0      1      9_   1


ASCII art
     |
    /|\
   /|||\
  /|||||\
 /|||||||\
-----------


*/


/*for($i = 0; $i < $pir*2; $i++): //bucle que genera los renglones
  if ($i > $pir): //pregunta si es la segunda mitad del banderin
    //echo "i > nro <br>";
    for($j = $pir*2-$i; $j > 0; $j--):
    //for($j = $nro*2-$i; $j > 0; $j--){ //cantidad de renglones restantes nos dicen cuantas columnas imprimir
      //echo "1 ";
?> \ <?php
    endfor;

  else : //primera mitad del banderin
    //echo "i < nro <br>";
  for($j = $pir*2-$i; $j > 0; $j--): //imprime las columnas
    //echo "1 " ;
?> / <?php
  endfor;
  endif;
  //echo "<br>"; //termina el renglon
?> <br>
<?php
endfor;

//for($j = 0; $j < $nro*2-$i; $j++){

//usar los mismos bucles que el banderin de H
//usar condicionales para saber que caracter poner



//1TAREA HACER ROMBITO de "A"
/*2TAREA hacer rombito de "A" con barritas en los bordes, punta superior A e inferior V
primera mitad de A y segunda mitad con V y en el medio <----> */


?>
