<?php
$frutas = array('Pera', 'Manzana', 'Banana', 'Durazno', 'Sandia', 'Quinoto', 'Kiwi', 'Melon', 'Pelon', 'Maracuya', 'Menbrillo', 'Mango', 'Cereza', 'Frutilla', 'Naranja', 'Mandarina', 'Ciruelas', 'Uvas' );
$verduras = array('Pepino', 'Tomate', 'Morron', 'Lechuga', 'Hinojo', 'Zanahoria', 'Espinaca', 'Acelga', 'Papa', 'Zapallo', 'Rabanito', 'Brocoli', 'Coliflor', 'Zuquinis', 'Berenjenas', 'Apio', 'Cebolla');
$frutas_seleccionadas = array( );
$verduras_seleccionada = array( );
foreach ($frutas as $esta_fruta){
  echo "<p>$esta_fruta</p>";
 if (strpos($esta_fruta, 'M') === 0){
   $frutas_seleccionadas[] = $esta_fruta;
 }
}
echo "<h3>Frutas que empiezan con: M</h3>";
foreach ($frutas_seleccionadas as $esta_fruta){
  echo "<p>$esta_fruta</p>";
}

//PONERLES TITULOS
//1TAREA: Hacer lo mismo con las verduras
echo "<h3>1 Tarea: Lista de Verduras</h3>";
foreach ($verduras as $esta_verdura){
  echo "<p>$esta_verdura</p>";
if (strpos($esta_verdura, 'Z') === 0){
  $verduras_seleccionada[] = $esta_verdura;
}
}
echo "<h4>Verdura que empieza con: Z</h4>";
foreach ($verduras_seleccionada as $esta_verdura){
  echo "<p>$esta_verdura</p>";
}

//2TAREA: mostrar todas las frutas y verduras que tengan mas de dos A (buscar la funcion de php)
//Es casi lo mismo que buscar las frutas/verduras con las letras pero agregar mas -> puede ser preg_match???
echo "<h3>2 Tarea: Mostrar frutas con mas de 2 a</h3>";
foreach ($frutas as $cada_fruta){
/*var_dump($cada_fruta);
var_dump (substr_count($cada_fruta, 'a'));
echo "<br>";*/
  if (substr_count($cada_fruta, 'a') > 2) {
    echo "<p>$cada_fruta</p>";
  }
}

echo "<h3>2 Tarea: Mostrar verduras con mas o igual de 1 e</h3>";
foreach ($verduras as $cada_verdura){
/*var_dump($cada_fruta);
var_dump (substr_count($cada_fruta, 'a'));
echo "<br>";*/
  if (substr_count($cada_verdura, 'e') >= 1) {
    echo "<p>$cada_verdura</p>";
  }
}

//3TAREA: Ordenar alfabeticamente las frutas y verduras y mostrarlo
echo "<h3>3 Tarea: Frutas ordenadas</h3>";
sort($frutas);
for ($i = 0; $i < count($frutas); $i++){
	echo $frutas[$i].'<br>';
}
echo "<h3>3 Tarea: Verduras ordenadas</h3>";
sort($verduras);
for ($i=0; $i < count($verduras); $i++) {
  echo $verduras[$i].'<br>';
}
/*$verduleria = $frutas+$verduras;
var_dump($verduleria); funciona pero no concadena, si ambas tienen la misma clave va a usar la primera*/
/*$a = array ('frutilla','guinda','banana');
$b = array ('brocoli','zapallo', 'zanahoria', 'papa');
$c = $b + $a;
var_dump($c);
echo "<br>";*/

echo "<h3>VERDULERIA</h3>";
$verduleria = array_merge($frutas, $verduras);
sort ($verduleria);
echo "<ul>";
foreach ($verduleria as $value) {
  echo "<li>$value</li>";
}
echo "</ul>";

echo "<h3>frutas y verduras intercaladas</h3>";
foreach ($frutas as $key => $fr) {
  if (isset($verduras[$key])) {
    echo "<p>$fr - {$verduras[$key]}</p>";
    }
  else {
    echo "<p>$fr</p>";
  }
}
