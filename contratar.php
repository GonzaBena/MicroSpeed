<?php
    session_start();
    //phpinfo();
	include_once("class/clsUsuarios.php");
	$Usuario = new clsUsuarios();
	$Usuario->id_usuario = $_SESSION['id_usuario'];
	$Usuario->id_pedido = $_REQUEST['p'];
	$datos = $Usuario->AceptarPedido();
	echo '<script language="javascript"> alert("Se aceptó el pedido correctamente.");</script>';
	echo '<script language="javascript"> window.location.href="mensajeria.php";</script>';


?>