 <?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if(empty($usuario) || empty($pass)){
header("Location: login.html");
exit();
}

mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('login') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from usuario where Username='" . $usuario . "'");//es una consulta para ver si se encuentra ell usuario y contraseña se encuentran en la base de datos
if($row = mysql_fetch_array($result)){
if($row['Password'] == $pass){
session_start();
$_SESSION['usuario'] = $usuario;
header("Location: contenidolog.php");
}else{
header("Location: login.html");
exit();
}
}else{
header("Location: login.html");
exit();
}


?>