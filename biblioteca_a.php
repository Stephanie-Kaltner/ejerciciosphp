<?php
function mostrar_libro($libro){
  foreach ($libro as $key => $valor) {
    echo "<p style=\"color:red;\">$key: $valor</p>";
  }
}
$libro1 = array ("Titulo"=>"El Alienista", "Autor"=>"Caleb Carr", "Editorial"=>"La Trama");
$libro1["Año"] = "2017";
$libro1["Genero"] = "Novela historica";
$libro1["Edicion"] = "1º";

$libro2= array ("Titulo"=>"La Sombra", "Autor" => "John Katzenbach", "Editorial"=> "Zeta");
$libro2["Año"] = "2010";
$libro2["Genero"] = "Ficcion, misterio";
$libro2["Edicion"] = "2º";

$libro3 = array ("Titulo"=>"El Psicoanalista", "Autor"=>"John Katzenbach", "Editorial"=>"B");
$libro3["Año"] = "2016";
$libro3["Genero"] = "Ficcion, Suspenso";
$libro3["Edicion"] = "12º";

$libro4 = array ("Titulo"=> "Pistorious", "Autor"=>"John Carlin" , "Editorial"=>"Planeta");
$libro4["Año"]= "2014";
$libro4["Genero"]= "Biografica";
$libro4["Edicion"]= "1º";

$libro5 = array ("Titulo"=> "Vestido de novia", "Autor"=> "Pierre Lemaitre", "Editorial"=> "Alfaguara");
$libro5["Año"]= "2015";
$libro5["Genero"]= "Ficcion, suspenso";
$libro5["Edicion"]= "2º";

//var_dump($libro2['Año']);

$biblioteca = array ($libro1['Autor'] =>$libro1, $libro5['Autor'] =>$libro5,
$libro3['Autor'] => array($libro3['Titulo'] =>$libro3, $libro2['Titulo']=> $libro2), $libro4['Autor'] =>$libro4,);
echo "<h1>Biblioteca</h1>";
foreach ($biblioteca as $libro){
 if (isset($libro['Titulo'])){
   echo "<br/>";
    mostrar_libro($libro);
   echo "<br/>";
 }

 else {
   foreach ($libro as $titulo => $un_libro){
     echo "<br/>";
      mostrar_libro($un_libro);
     echo "<br/>";
   }
 }
}
$titulo=filter_input(INPUT_GET,'titulo', FILTER_SANITIZE_ENCODED);
$campo=filter_input(INPUT_GET, 'campo');
echo "<h2>mostrar campo</h2>";
$titulo = urldecode($titulo);
var_dump($titulo);
foreach ($biblioteca as $registro){
  if (isset($registro['Titulo']) && ($registro['Titulo']== $titulo)){
      /*echo "<br/>";
      var_dump($registro[$campo]);*/
      mostrar_campo($registro, $campo);
      break;
  }
else {
  foreach ($registro as $titulo_libro => $libro){
    if ($titulo_libro == $titulo){
      /*echo "<br/>";
      var_dump($libro[$campo]);*/
      mostrar_campo($libro, $campo);
      break;
    }
   }
  }
 }
//var_dump($biblioteca['John Katzenbach']['La Sombra']['Genero']);

ksort($biblioteca);
//var_dump($biblioteca['Pierre Lemaitre']['Edicion']);

//2TAREA: mostrar todos los libros que tienen el mismo genero ingresado
echo "<h3>libros con mismo genero</h3>";
$genero = filter_input(INPUT_GET, 'genero', FILTER_SANITIZE_ENCODED);
foreach ($biblioteca as $registro){
  if (isset($registro['Genero']) && incluye_genero($registro['Genero'], $genero)){
    mostrar_libro($registro);
  }
  elseif (!isset($registro['Genero'])){
    foreach ($registro as $titulo_libro => $libro){
      if (incluye_genero($libro['Genero'], $genero)){
        mostrar_libro($libro);
      }
    }
  }
}

echo "<h3>Mostrar todos los libros de la misma Edicion </h3>";
$edicion = filter_input(INPUT_GET, 'edicion', FILTER_SANITIZE_ENCODED);
var_dump($edicion);
echo "<br>";
foreach ($biblioteca as $registro){
  if (isset($registro['Edicion']) && intval($registro['Edicion']) == $edicion){
    mostrar_libro($registro);
  }
  elseif (!isset($registro['Edicion'])) {
    foreach ($registro as $un_libro){
      if (intval($un_libro['Edicion']) == $edicion) {
        mostrar_libro($un_libro);
      }
    }
  }
}



//prueba unitaria de incluye_genero()
var_dump(incluye_genero('accion, suspenso, Aventuras', 'drama'));
echo "<br>";

var_dump(incluye_genero('accion, suspenso, Aventuras', 'suspenso'));
echo "<br>";

var_dump(incluye_genero('accion, suspenso, Aventuras', 'aventuras'));
echo "<br>";

var_dump(incluye_genero('biografica, novela historica, aventuras', 'novela historica'));
echo "<br>";

var_dump(incluye_genero('biografica, novela histórica, aventuras', 'novela histórica' ));
echo "<br>";

var_dump(incluye_genero('biografica, histórica novela, aventuras', 'histórica novela'));
echo "<br>";
//fin de prueba unitaria

//TAREA: TERMINAR TODOS LOS CASOS DE PRUEBA!!!! y que cumplan lo que hemos dicho que tiene que hacer la funcion

/**
* La funcion indica si un libro pertenece a un determinado genero
* @var $genero_libro Género de un libro
* @var $genero Género que estamos buscando
* @return true si pertenece, false si no pertenece
*/
function incluye_genero($genero_libro, $genero){
//primero fijarse si las dos cadenas son iguales
if ($genero_libro == $genero){
  return true;
}
//segundo fijarse si las cadenas son iguales con las mayusculas y minusculas cambiadas (case insensitive)
if (strcasecmp($genero_libro, $genero) == 0) {
  return true;
}
//quinto fijarse si no coinciden por los espacios
if (trim($genero_libro) == trim($genero)){
  return true;
}
//tercero fijarse si genero esta dentro de genero_libro
if (strpos($genero_libro, $genero) !== false ) {
  return true;
}
//cuarto fijarse si genero esta dentro de genero_libro con las mayusculas y minusculas cambiadas (case insensitive)
if (stripos($genero_libro, $genero) !== false ) {
  return true;
}
return false;
}

//1TAREA
function mostrar_campo($libro, $nombre_campo){
     echo "<br/>";
     echo "el campo es: ";
     var_dump($libro[$nombre_campo]);
  }
