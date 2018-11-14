<?php
//1TAREA: crear un array de palabras, recorrerlo y que nos diga cuantas vocales tiene cada palabra (por lo menos 10 palabras)
echo "<h3> Mostrar palabras</h3>";
$palabras = array('cartón', 'caligrafía', 'peluche', 'suculentas', 'cactus', 'telescopio', 'cobayo', 'fotofobia', 'chewbacca', 'programación', 'montañas', 'recitales', 'música', 'pintura' );
$vocales = array( ord('a') => 'a', ord('e') => 'e', ord('i') => 'i', ord('o') => 'o', ord('u') => 'u');
var_dump($palabras);
echo "<br>";
var_dump($vocales);
foreach ($palabras as $una_palabra){
 $chars = count_chars($una_palabra, 1);
 $suma = 0;
 echo "<h5>Palabra: $una_palabra</h5>";
 foreach ($vocales as $byte_val => $una_vocal){
   if (isset($chars[$byte_val])) {
     echo "<p>Caracter: ".chr($byte_val).", Frecuencia: {$chars[$byte_val]}</p>";
     $suma += $chars[$byte_val];
    }
  }
echo "<p>suma: $suma</p>";
}

//iconv_strlen ( string $str [, string $charset = ini_get("iconv.internal_encoding") ] )   Retorna el número de caracteres de un string
/*function mb_count_chars($input) {  //Realiza una conversión a mayúsculas/minúsculas de un string
    $l = mb_strlen($input, 'UTF-8');
    $unique = array();
    for($i = 0; $i < $l; $i++) {
        $char = mb_substr($input, $i, 1, 'UTF-8');
        if(!array_key_exists($char, $unique))
            $unique[$char] = 0;
        $unique[$char]++;
    }
    return $unique;
}*/

//2TAREA: que nos diga de cada palabra si es grave, aguda o esdrujula
echo "<h3>Palabras grave, aguda o esdrujula</h3>";
//0: para cada palabra::
//1: identificar si la palabra lleva tilde
//2: separar las palabras en silabas
//3: si lleva tilde, ubicar la silaba donde esta la tilde(si la ultima-aguda, penultima-grave, sino esdrujula)
//4:si no lleva tilde, hay que fijarse en que termina, porque si termina en 'n', 's' o vocal es grave, sino es aguda
foreach ($palabras as $una_palabra) {
$tiene_tilde =  preg_match('[áéíóú]', $una_palabra, $tilde);
}

function silabear($una_palabra){
  /*1.-Toda sílaba debe contener por lo menos una vocal.
  2.-Los grupos consonánticos: br, bl, cn, cr, cl, dr, fr, fl, gr, gl, ll, pr, pl ,tr ,rr ,ch no pueden separarse al dividir en sílabas.
  3.-Cuando una consonante se encuentra entre dos vocales, se une a la segunda vocal.
  4.-Cuando hay dos consonantes entre dos vocales, cada vocal se une a una consonante, excepto los grupos consonánticos inseparables.
  5.-Si hay tres consonantes entre dos vocales, las dos primeras consonantes se unen a la primera vocal mientras que la tercera consonante se une a la segunda vocal.
	6.-h seguida o precedida de consonante, se divide separando ambas letras.
  7.-Los diptongos son inseparables, son diptongos las siguientes parejas de vocales: ai, au, ei, eu, io, ou, ia, ua, ie, ue, oi, uo, ui, iu, ay, ey, oy.
  8.-La h entre dos vocales no no destruye un diptongo.
  9.-Un diptongo se destruye si se acentúa la vocal cerrada.
  10.-Los triptóngos son una unión inseparable de tres vocales, son triptóngos los siguientes grupos de vocales: iai, iei, uai, uei, uau, iau, uay, uey.*/
  $diptongo = '/ah?i|ah?u|eh?i|eh?u|ih?o|oh?u|ih?a|uh?a|ih?e|uh?e|oh?i|uh?o|uh?i|ih?u/';
  $triptongo = '/iai|iei|uai|uei|uau|iau/';
  $consonanticos = '/br|bl|cn|cr|cl|dr|fr|fl|gr|gl|ll|pr|pl|tr|rr|ch/';
  $consonantes = '/[bcdfghjklmnpqrstvwxyz]/';
  $vocales = '/[aeiouáéíóú]/';
  $silaba = "/[($consonantes)*|($consonanticos)]?[($vocales)|($diptongo)|($triptongo)]($consonantes){0,2}/";
  echo "$silaba";
//https://regex101.com/r/qDFKb5/3 nuestra expresion regular
}
silabear("hola");

//1TAREA: leer http://php.net/manual/es/reference.pcre.pattern.syntax.php -- expresiones regulares https://regex101.com/ --SI O SI
// http://www.eldba.com/22-un-metodo-para-contar-silabas-en-php-y-expresiones-regulares-funciones-preg.html


//2TAREA: tratar de encontrar la expresion regular para separar en silabas

/*static function calculaSilabas($palabra,$poética="no") {

     $vocales = '[aeiouáéíóú]';

     $vocalAbierta = '[aeoáéíóú]';

     $vocalNoAcentuada = '[aeiou]';
     $vocalCerrada = '[ui]';
     $yComoVocal = 'y';
     $noVocales = "[^aeiouáéíóú]";
     $triptongos = "/$vocalAbierta$vocalCerrada$vocalCerrada|$vocalCerrada$vocalCerrada$vocalAbierta/i";
     $diptongos = "/$vocalAbierta$vocalCerrada|$vocalCerrada$vocalAbierta|$vocalCerrada$vocalCerrada|$vocales$yComoVocal$noVocales|$vocales$yComoVocal$/i";
     $sinalefa = "/$vocalNoAcentuada$vocalAbierta/i";
     // se va la primera !!!!
     $cantidadSinalefas = 0;
     $palabra = preg_replace($triptongos,'', $palabra, -1 , $cantidadTriptongos);
     $palabra = preg_replace($diptongos,'', $palabra, -1 , $cantidadDiptongos);
     if ($poética<>"no") {
          $palabra = preg_replace($sinalefa,'', $palabra, -1 , $cantidadSinalefas);
     }
     $palabra = preg_replace("/$vocales/i",'', $palabra, -1 , $cantidadVocales);
     $silabas = $cantidadTriptongos+$cantidadDiptongos+$cantidadSinalefas+$cantidadVocales;
     return $silabas;
}*/
