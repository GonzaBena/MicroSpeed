<?php
    session_start();
    //phpinfo();
	include_once("class/clsUsuarios.php");
	$Usuario = new clsUsuarios();
	//$Usuario->id_usuario = $_SESSION['id_usuario'];
	$Usuario->id_pedido = $_REQUEST['p'];
	$datos = $Usuario->ConfirmarPedido();
	echo '<script language="javascript"> alert("Se confirmo la entrega correctamente.");</script>';
	echo '<script language="javascript"> window.location.href="pedido.php";</script>';


?>