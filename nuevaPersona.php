<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["email"]) || !isset($_POST["tipo"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$password = md5($_POST["apellidos"]) ;
$email = $_POST["email"];
$tipo =$_POST["tipo"];

$sentencia = $base_de_datos->prepare("INSERT INTO usuarios(usuario, clave, id_tipo, email) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $password, $tipo, $email]); # Pasar en el mismo orden de los ?

if ($resultado === true)echo '<script language="javascript"> window.location.href="login.php";</script>';
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>