<?php
$a = array(1,2,3,4.5, 6, "hola mundo", array('a', 'b'));
 echo $a;
 echo "<br/>";
var_dump($a);
$b = array(1,2,3,4, "hola", "mundo");
 echo "<br/>";

$c = [4,5,6];
 echo "<br/>";
 var_dump($c);
 echo "<br/>";
$b[] = 'de nuevo'; //nuevo elemento al array
var_dump($b);
echo "<br/>";
echo count($b);
 $j = 0;
 //se usa cuando queremos ejecutar el codigo, todas las veces que sean necesario mientras se cumpla una condicion, esta se llama 'condicion de continuacion'
 while($j < count($b)){
   echo $b[$j];
   $j++;
 }
 echo "<br/>";
 $j = 0;
 /*se usa cuando queremos ejecutar el codigo, todas las veces que sean necesario mientras se cumpla una condicion,
 esta se llama 'condicion de continuacion', con la diferencia que la primera vez siempre se ejecuta*/
 do{
   echo $b[$j];
   $j++;
 } while($j < count($b));
echo "<br/>";
//se usa cuando queremos ejecutar algo una determinada cantidad de veces
 for($j = 0; $j < count($b); $j++){ //bucle for
    echo $b[$j];
   }
echo "<br/>";
//se ejecuta cuando queremos recorrer todos los elementos de un array
foreach($b as $elemento){
  echo $elemento;
}
echo $b[1]; //indice o clave (numero entre corchetes)
//se ejecuta cuando queremos recorrer todos los elementos de un array teniendo en cuenta el indice del elemento
foreach($b as $indice => $valor){
  echo "indice: $indice, valor: $valor  ";
}
$usuario = array("nombre"=>"Pepe", "apellido"=> "Honguito"); //array asociativo
$usuario["edad"] = 35;
$usuario["direccion"] = "calle falsa 123";
$usuario["puesto"] = "empresa";
var_dump($usuario);

foreach ($usuario as $key => $valor) {
  echo "<p>$key: $valor</p>";
}
$nro=3;
for($i = 0; $i < $nro; $i++){
  for($j = 0; $j < $nro; $j++){
   echo " 1 ";
  }
  echo "<br/>";
}
