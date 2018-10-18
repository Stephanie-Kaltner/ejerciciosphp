<?php
class Libro {

  //constantes de las variables
  const GENEROS_POSIBLES=array("Novela historica", "Ficcion", "Misterio", "Suspenso", "Biografica");

  private static $biblioteca = array();

  private $titulo;
  private $autor;
  private $editorial;
  private $anio;
  private $genero=array();
  private $edicion;
  public $estado="no leido";

function __construct($titulo, $autor, $editorial, $anio, $genero, $edicion){
  $this -> titulo = $titulo;
  $this -> autor = $autor;
  $this -> editorial = $editorial;
  $this -> anio = $anio;
  $this -> setGenero($genero);
  $this -> edicion = $edicion;
  self::$biblioteca[]=$this;
  }

static function &getBiblioteca(){
  return self::$biblioteca;
}

static function prestar($indice){
  self::$biblioteca[$indice]->estado = "prestado";
}

static function devolver($indice){
  self::$biblioteca[$indice]->estado="devuelto";
}

function getTitulo(){
  return $this->titulo;
}

function getAutor(){
  return $this->autor;
}

function getEditorial(){
  return $this->editorial;
}

function getAnio(){
  return $this->anio;
}

function getGenero(){
  return $this->genero;
}
public function setGenero($genero){
  if (in_array($genero, self::GENEROS_POSIBLES)){
    $this -> genero[] = $genero;
  }
  else {
    echo "genero inesistente: $genero";
  }

}

function getEdicion(){
  return $this->edicion;
}

}



echo "LIBRO 1: ";
$libro1 = new Libro("El Alienista", "Caleb Carr", "La Trama", "2017", Libro::GENEROS_POSIBLES[0], "1º");
var_dump($libro1);
echo "<br>";
echo "BIBLIOTECA: ";
var_dump(Libro::getBiblioteca());
echo "<br><br>";

echo "LIBRO 2: ";
$libro2=new Libro("La Sombra", "John Katzenbach", "Zeta", "10", Libro::GENEROS_POSIBLES[1], "2º");
$libro2-> setGenero(Libro::GENEROS_POSIBLES[2]);
var_dump($libro2);
echo "<br>";
echo "BIBLIOTECA: ";
var_dump(Libro::getBiblioteca());
echo "<br><br>";


echo "LIBRO 3: ";
$libro3=new Libro("El Psicoanalista", "John Katzenbach", "B", "2016", Libro::GENEROS_POSIBLES[1], "12º");
$biblioteca= Libro::getBiblioteca();
$libro3-> setGenero(Libro::GENEROS_POSIBLES[3]);
var_dump($libro3);
echo "<br>";
echo "BIBLIOTECA: ";
var_dump($biblioteca);
echo "<br><br>";

echo "LIBRO 4: ";
$libro4=new Libro("Pistorious", "John Carlin" , "Planeta", "2014", Libro::GENEROS_POSIBLES[4], "1º");
var_dump($libro4);
echo "<br>";
echo "BIBLIOTECA: ";
var_dump($biblioteca);
echo "<br><br>";

echo "LIBRO 5: ";
$libro5=new Libro("Vestido de novia", "Pierre Lemaitre", "Alfaguara", "2015", Libro::GENEROS_POSIBLES[1], "2º");
$libro5-> setGenero(Libro::GENEROS_POSIBLES[3]);
var_dump($libro5);
echo "<br>";
echo "BIBLIOTECA: ";
var_dump($biblioteca);
echo "<br>";




//Tarea: cambiar la propiedad genero para que sea un array de generos HECHO
//Tarea: que setGenero sea publico y agrege el genero al array de generos que tendre HECHO
//Tarea: crear todos los libros a objetos HECHO
//Tarea: archivo aparte, hacer un universo de facturacion, clase: venta, clase: cliente, clase: producto, PARA EL LUNES
//TODO: aca me quede, tengo que hacer tal y tal
