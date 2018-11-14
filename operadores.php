<?php
//OPERADORES
$a= 10;
$b= 35;
$c= 15;
$d= $a + $b + $c + $a ;
$d += $a;
var_dump($d);
echo "<br>";
$d -= $c;
$d -= $a;
var_dump($d);
echo "<br>";
$a *= 5;
var_dump($a);
echo "<br>";
$d /= $a;
var_dump($d);
echo "<br>";

echo "<p>incremento y decremento</p>";
//incremento y decremento
$a++; //primero la usa y luego la incrementa
var_dump($a);
++$a; //primero la incrementa y luego la usa
var_dump($a);
echo "<br>";
//$c--;
var_dump($c--);
//--$c;
var_dump(--$c);
echo "<br>";

// El "==" es de comparacion, si tienen el mismo valor,, todo lo que no sea cero o falso da true
var_dump($a==$c);
$d= '52';
var_dump($a==$d);
var_dump($a==true);
var_dump(0==false);
var_dump(1==true);
echo "<br>";
// El "===" tienen que ser el mismo valor y el mismo tipo
var_dump($a===$d);
var_dump($a===true);
var_dump(1===true);
var_dump(0===false);
var_dump($a===false);
echo "<br>";

//Negacion: cambia el valor logico (si algo da verdadero, dira que es falso)
var_dump(!true);
var_dump(!true==false);
var_dump(!true===false);
var_dump(!$a);
echo "<br>";
//!= es para cuando son distintos
var_dump($a != $d);
var_dump($a != false);
var_dump(false != true);
var_dump(false != 0);
var_dump($a != true);
echo "<br>";

//no son exactamente iguales !==
var_dump($a !== $d);
var_dump($a !== false);
var_dump(0 !== false);
var_dump(false !== true);
var_dump($a !== true);
echo "<br>";

//ternario,, recibe 3 cosas,, es de comparacion de una linea, se usa para asignaciones condicionales
$e= ($a > 0)?15 : 23; // $a es mayor que cero?, si es asi que devuelva un 15, si no es asi que devuelva un 23 => equivale a esto if($a>0){ $e = 15;} else{$e = 23;}
$f= $g??$j??$b; //es equivalente a $f = !is_null($g)?$g:(!is_null($j)?$j:(!is_null($b)?$b:null)));
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($f==$b);
echo "<br>";
echo "<br>";

//1TAREA: usar los primeros operadores para comparar las variables de la a-f, unas con otras hasta la linea 70
$a -= $b;
var_dump($a);
$c *= $a;
var_dump($c);
$b /= $a;
var_dump($b);
$d *= $c;
var_dump($d);
$e -= $a;
echo "<br>";
var_dump($e);
$b *= $f;
var_dump($b);
$f *= $a;
var_dump($f);
echo "<br>";
$e /= $f;
var_dump($e);
echo "<br>";

//incremento y decremento
var_dump(--$d);
var_dump($d--);
var_dump(++$d);
var_dump($d++);
echo "<br>";
var_dump($e++);
var_dump(++$e);
echo "<br>";
var_dump(++$f);
var_dump(--$e);
echo "<br>";
var_dump(--$f);
echo "<br>";
echo "<br>";

//==
var_dump($f == $b);
var_dump($e == $c);
echo "<br>";

//===
var_dump($f === $e);
var_dump($e === $a);
var_dump($b === $f);
echo "<br>";

//!....===
var_dump(!$f === $a);
var_dump(!$e === $e);
var_dump(!$e);
var_dump(!$f);
echo "<br>";

//!=
var_dump($f != $e);
var_dump($e != $a);
var_dump($b != $c);
echo "<br>";

//!==
var_dump($f !== $a);
var_dump($e !== $f);
echo "<br>";



//2TAREA: usar constantes para comprarlas con los operadores hasta la linea 70, usar para cada variable una constante que nos de verdadero y otra falso
//Negacion
var_dump(!$b);
echo "<br>";
var_dump(!$b == $c);
var_dump($a !== $b);
