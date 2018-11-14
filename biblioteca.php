<?php

function mostrar_libro($libro){
  foreach ($libro as $key => $valor) {
    echo "<p style=\"color:red;\">$key: $valor</p>";
  }

}


echo "<h1>Lista de libros</h1>";
$libro1 = array ("Titulo"=>"El Alienista", "Autor"=>"Caleb Carr", "Editorial"=>"La Trama");
$libro1["Año"] = "2017";
$libro1["Genero"] = "Novela historica";
$libro1["Edicion"] = "1º";
var_dump($libro1);

/*foreach ($libro1 as $key => $valor) {
  echo "<p>$key: $valor</p>";
}*/
mostrar_libro($libro1);

echo "<br/>";
$libro2 = array ("Titulo"=>"La Sombra", "Autor"=>"John Katzenbach", "Editorial"=>"Zeta");
$libro2["Año"] = "2010";
$libro2["Genero"] = "Ficcion, misterio";
$libro2["Edicion"] = "2º";
var_dump($libro2);

/*foreach ($libro2 as $key => $valor) {
  echo "<p>$key: $valor</p>";
}*/
mostrar_libro($libro2);

echo "<br/>";
$libro3 = array ("Titulo"=>"El Psicoanalista", "Autor"=>"John Katzenbach", "Editorial"=>"B");
$libro3["Año"] = "2016";
$libro3["Genero"] = "Ficcion, Suspenso";
$libro3["Edicion"] = "12º";
var_dump($libro3);

/*foreach ($libro3 as $key => $valor) {
  echo "<p>$key: $valor</p>";
}*/
mostrar_libro($libro3);

echo "<br/>";
$libro4 = array ("Titulo"=> "Pistorious", "Autor"=>"John Carlin" , "Editorial"=>"Planeta");
$libro4["Año"]= "2014";
$libro4["Genero"]= "Biografica";
$libro4["Edicion"]= "1º";
var_dump($libro4);

/*foreach ($libro4 as $key => $valor) {
  echo "<p>$key: $valor</p>";
}*/
mostrar_libro($libro4);

echo "<br/>";
$libro5 = array ("Titulo"=> "Vestido de novia", "Autor"=> "Pierre Lemaitre", "Editorial"=> "Alfaguara");
$libro5["Año"]= "2015";
$libro5["Genero"]= "Ficcion, suspenso";
$libro5["Edicion"]= "2º";
var_dump($libro5);

/*foreach ($libro5 as $key => $valor) {
  echo "<p>$key: $valor</p>";
}*/
mostrar_libro($libro5);

$biblioteca = array ($libro1, $libro2, $libro3, $libro4, $libro5);
echo "<h1>Biblioteca</h1>";
foreach ($biblioteca as $libro){
echo "<br/>";
/* foreach ($libro as $campo => $valor) {
   echo "<p>$campo: $valor</p>";
 }*/
 mostrar_libro($libro);
echo "<br/>";
}
