<?php
//Tarea: archivo aparte, hacer un universo de facturacion, clase: venta, clase: cliente, clase: producto, PARA EL LUNES
class Producto{

   const COLORES_POSIBLES= array("Rojo", "Blanco", "Negro", "Beige", "Rosa", "Anulares",
         "Floreado", "Azul", "Leopardo", "Verde agua", "Violeta", "Salmon", "Gris");

   const MODELOS_CORPINIOS= array("Tasa soft", "Aro", "Triangulo", "Medio push up", "Push up", "Straples");

   const MODELOS_BOMBACHAS= array("Culote", "Vedetina", "Vedetinales", "Vedetina alta", "Culoteles", "Tanga", "Colales");

   const TELAS_POSIBLES= array("Lycra", "Encaje", "Microfibra", "Algodon", "Tul", "Saten", "Plumeti");

   const TALLES_POSIBLES= array(85, 90, 95, 100, 105, 110, 115);

 private $id;
 private $corpinio;
 private $bombacha;
 private $color=array();
 private $talle;
 private $tela;
 private $precio;

 private static $productos= array();

function __construct($corpinio, $bombacha, $color, $talle, $tela, $precio, $id=NULL){ //no siempre voy a recibir el id, cuando no lo reciba lo tomo como null (es un parametro opcional)
  $this-> setCorpinio($corpinio);
  $this->bombacha = $bombacha;
  $this-> setColor($color);
  $this-> setTela($tela);
  $this-> setTalle($talle);
  $this->precio = $precio;
  $this->id = $id;
  self::$productos[] = $this;
}

function getId(){
  return $this->id;
}


function getCorpinio(){
  return $this->corpinio;
}

function getBombacha(){
  return $this->bombacha;
}

function getColor(){
  return $this->color;
}

function getTela(){
  return $this->tela;
}

function getTalle(){
  return $this->talle;
}

function getPrecio(){
  return $this->precio;
}


public function setCorpinio($corpinio){
  if(in_array($corpinio, self::MODELOS_CORPINIOS)){
    $this->corpinio =$corpinio;
  }
  return $this;
}

public function setBombacha($bombacha){
  if (in_array($bombacha, self::MODELOS_BOMBACHAS)){
    $this->bombacha= $bombacha;
  }
return $this;
}



public function setColor($color){
  if(in_array($color, self::COLORES_POSIBLES)){
    $this->color = $color;
  }
  else{
    echo "Color inesistente: $color";
  }
  return $this;
}

public function setTela($tela){
 if(in_array($tela, self::TELAS_POSIBLES)){
    $this->tela= $tela;
 }
  return $this;
}


public function setTalle($talle){
  if(in_array($talle, self::TALLES_POSIBLES)){
    $this->talle= $talle;
  }

  return $this;
}

public function borrar(){
  unset(self::$productos[$this->getId()]);
  self::guardar();
}


public static function guardar(){
  file_put_contents("productos.ser", serialize(self::$productos));
}



public function setPrecio($precio){
$this->precio = $precio;
  return $this;
  }


public static function getAll(){
/* Ejemplo de persistencia en archivo
 $productos_serialize= file_get_contents("productos.ser");
  self::$productos= unserialize($productos_serialize);*/
  //persistencia en base de datos
  $pdo= self::getPDO();
  $sql= "SELECT * FROM productos";
  $productos= array();
  foreach ($pdo->query($sql) as $row){
    $productos[$row["id"]]= new Producto($row['corpinio'], $row['bombacha'], $row['color'], $row['talle'], $row['tela'], $row['precio'], $row['id']);
  }
  self::$productos= $productos;

return self::$productos;
}


public static function getByID($id_producto){
  /*self::getAll();
  if (isset(self::$productos[$id_producto])) {
    return self::$productos[$id_producto];
  } //a partir de aqui quiere decir que no encontro ese producto, por eso no lleva else
  echo "producto inexistente";*/
  $pdo= self::getPDO();
  $sql= "SELECT * FROM productos WHERE id= :id";
  $statement= $pdo->prepare($sql);
  $statement-> execute(array(":id"=>$id_producto));
  $row= $statement-> fetch(PDO::FETCH_ASSOC);
    $producto= new Producto($row['corpinio'], $row['bombacha'], $row['color'], $row['talle'], $row['tela'], $row['precio'], $row['id']);
return $producto;
}


private static function getPDO(){
  $dsn= "mysql:dbname=lenceria;host=localhost";
  $username= "usuario_lenceria";
  $password= "s73f13sc0p4d4";
  $dbh= NULL;

  try {
    $dbh = new PDO($dsn, $username, $password);
  }
  catch (PDOException $e){
    echo 'Connection failed: ' . $e->getMessage();
  }
  return $dbh;
}



}





/*echo "CONJUNTO 1: ";
new Producto(Producto::MODELOS_CORPINIOS[0], Producto::MODELOS_BOMBACHAS[1], Producto::COLORES_POSIBLES[3], Producto::TALLES_POSIBLES[0], Producto::TELAS_POSIBLES[0], 400);
//var_dump($conjunto1);
//echo "<br><br>";

//echo "CONJUNTO 2";
new Producto(Producto::MODELOS_CORPINIOS[2], Producto::MODELOS_BOMBACHAS[2], Producto::COLORES_POSIBLES[2], Producto::TALLES_POSIBLES[1], Producto::TELAS_POSIBLES[3], 300);
//var_dump($conjunto2);
//echo "<br><br>";

//echo "CONJUNTO 3";
new Producto(Producto::MODELOS_CORPINIOS[1], Producto::MODELOS_BOMBACHAS[0], Producto::COLORES_POSIBLES[0], Producto::TALLES_POSIBLES[3], Producto::TELAS_POSIBLES[2], 260);
//var_dump($conjunto3);
//echo "<br><br>";


//echo "CONJUNTO 4";
new Producto(Producto::MODELOS_CORPINIOS[3], Producto::MODELOS_BOMBACHAS[5], Producto::COLORES_POSIBLES[1], 85, Producto::TELAS_POSIBLES[4], 280);
//var_dump($conjunto4);
//echo "<br><br>";

//var_dump(Producto::getAll());
*/
