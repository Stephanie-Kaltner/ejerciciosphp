<?php
//Agenda

//1TAREA: completar el array de materias
//2TAREA: en la linea 30, mostrar la materia si corresponde a ese dia y hora
$semana = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');
$horarios = array('8', '8:30', '9', '9:30', '10', '10:30', '11', '11:30', '12',
'12:30', '13', '13:30', '14', '14:30', '15', '15:30', '16', '16:30', '17', '17:30',
'18', '18:30', '19', '19:30', '20', '20:30', '21', '21:30', '22', '22:30', '23');
$materias = array('lunes' => array('8:30' => 'fotografia'),
'martes' => array('10' => 'ilustracion', '12' => 'Morfologia 2'),
'miercoles' => array('14' => 'DGPC', '9' => 'comunicacion 2', '19:30' => 'Tipografia 2'),
'jueves' => array('9:30' => 'Historia 2', '19' => 'DG3'),
'viernes' => array('14' => 'Sistemas DG', '19' => 'Gpp'),
'sabado' => array('11' => 'psicologo'),
'domingo' => array('12:30' => 'almuerzo familiar'));
?>

<html>
 <head></head>
  <body>
   <table border="1">
    <tr>
      <th>Horarios</th>
<?php
  foreach ($semana as $dia){
    echo "<th>$dia</th>";
  }
?>
    </tr>

  <?php
  foreach ($horarios as $hora){
    echo "<tr><td>$hora</td>";
    foreach ($semana as $dia){
        echo "<td>";
if (isset($materias[$dia][$hora])){
  echo $materias[$dia][$hora];
}
        echo "</td>";

    }
    echo "</tr>";
  }
  ?>

   </table>
  </body>
</html>
