<?php
$semana = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');
 var_dump($semana);
?>
 <html>
 <head></head>
 <body>
   <form method="post">
     <label for="indice">
       Ingrese un numero
     </label>
     <input type="number" name="indice">
     <input type="submit" name="boton">
   </form>
 </body>
 </html>

<?php
 //si recibimos un numero, tiene que aparecer en la pantalla
 if (!empty($_POST)) {
   echo "usted a ingresado el numero: {$_POST['indice']}";
//segun el numero que ingrese, vamos a mostrar un dia de la semana, si ingresa un num > vamos a mostrar un error
   echo "el dia de la semana corresopondiente es: {$semana[$_POST['indice']]}";
//si elige si es sabado o domingo, que muestre que es finde de semana
//si elige lunes que le desee buena semana
//si elige viernes que le desee buen finde
//si elige cualquier otro dia, que le desee buenos dias
  /*switch ($_POST['indice']) {
    case 5:
    case 6:
      echo "<p>Es fin de semana</p>";
      break;
    case 0:
     echo "<p>Que tengas buena semana</p>";
     break;
    case 4:
     echo "<p>BUEN FINDE</p>";
     break;
    default:
      echo "<p>Que tengas buen dia</p>";
      break;
  }*/
  //TAREA1: hacer lo mismo con
  if($_POST['indice'] == 5 || $_POST['indice'] == 6){
   echo "<p>Es fin de semana</p>";
  }
  elseif($_POST['indice'] == 0){
   echo "<p>Que tengas buena semana</p>";
  }
  elseif($_POST['indice'] == 4){
   echo "<p>BUEN FINDE</p>";
  }
  else{
   echo "<p>Que tengas buen dia</p>";
 }
 //TAREA2: dependiendo el numero que ingrese, debe mostrarme todos los dias de la semana hasta el que me mostro
 for ($i=0; $i <= $_POST['indice'] ; $i++) {
   echo "<p>{$semana[$i]}</p>";
 }
  }

//TAREA3: dependiendo el numero que ingrese, que me diga cuantos dias faltan para llegar al sabado, si es sabado o domingo que diga que es finde
switch ($_POST['indice']) {
  case 5:
  case 6:
    echo "<p>Es fin de semana</p>";
    break;
  default:
  $d = 5 - $_POST['indice'];
    echo "<p>Faltan: $d para el sabado</p>";
    break;
}
