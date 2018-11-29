<?php
session_start();
    //phpinfo();
include_once("class/clsUsuarios.php");
$Usuario = new clsUsuarios();
$Usuario->usuario = $_POST['username'];
$Usuario->clave = $_POST['password'];
$datos = $Usuario->Login();
	//var_dump($datos);exit();
$id_usuario = $datos[0]['id_usuario'];
$tipo_usuario = $datos[0]['id_tipo'];
if ($id_usuario > 0 and $tipo_usuario == 1) {
		//echo "estoy logueado";
  $_SESSION['id_usuario'] = $id_usuario;
  echo '<script language="javascript"> window.location.href="pedido.php";</script>';
} elseif ($id_usuario > 0 and $tipo_usuario == 2) {
  $_SESSION['id_usuario'] = $id_usuario;
  echo '<script language="javascript"> window.location.href="pedido.php";</script>';
} elseif ($id_usuario > 0 and $tipo_usuario == 3) {
  $_SESSION['id_usuario'] = $id_usuario;
  echo '<script language="javascript"> window.location.href="mensajeria.php";</script>';
} else {
		//echo "NO estoy logueado";
  echo '<script language="javascript"> window.location.href="index.php";</script>';
}

?>