<html>
<head>
<title>PHP y MySQL</title>
</head>
<body>
<p>Guardando datos...</p>
<br>
<?php

$db = mysql_connect('localhost', 'carlos', 'nose123');
mysql_select_db('integradora4', $db);

$nom= $_POST['Id_Trabajador'];
$ape = $_POST['Id_Contrato'];
$pu = $_POST['Usurio'];
$ns = $_POST['Contraseña'];
$cur = $_POST['Fecha'];
$hora = $_POST['Hora'];


$sentencia='insert into Trabajador values (';
$N ='Null';
$comilla='"';
$coma=',';
$parentesis=')';
$insercion = $sentencia .$N .$coma .$comilla .$nom .$comilla . $coma .$comilla .$ape .$comilla .$coma . $comilla . $pu .$comilla .$coma .$comilla .$ns .$comilla . $coma . $comilla .$cur .$comilla . $coma . $comilla .$hora .$comilla  .$parentesis;


$result = mysql_query($insercion , $db);


?>
</body>
</html>