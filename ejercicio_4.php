<html>
<head>
</head>

<body>

  <form method="post" action="ejercicio_4.php">
    <input type="text" name="campo1"/>
    <select name="opcion">
      <option value="sumar">+</option>
      <option value="restar">-</option>
      <option value="multiplicar">*</option>
      <option value="dividir">/</option>
    </select>
    <input type="text" name="campo2"/> <br>
    <input type="submit" name="calcular" value="calcular"/>
  </form>

</body>
</html>

<?php
include ("math.php");
 if (isset($_REQUEST["calcular"])){
   $n1=filter_input(INPUT_POST, 'campo1');
   $n2=filter_input(INPUT_POST, 'campo2');
   $op=filter_input(INPUT_POST, 'opcion');

$operaciones = array('sumar' =>'+' , 'restar' => '-', 'multiplicar' =>'*', 'dividir' =>'/' );

   echo "$n1 $operaciones[$op] $n2 =" . call_user_func(array('matematica', $op), $n1, $n2);



   /*switch ($op) {
     case 0:
       echo "$n1 + $n2 =" .matematica :: sumar($n1,$n2);
       break;
     case 1:
       echo "$n1 - $n2 =" .matematica :: restar($n1,$n2);
       break;
    case 2:
       echo "$n1 * $n2 =" .matematica :: multiplicar($n1,$n2);
       break;
    case 3:
       echo "$n1 / $n2 =" .matematica :: dividir($n1,$n2);
      break;
   }*/
 }
