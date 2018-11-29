<?php
    session_start();
    //phpinfo();
	include_once("class/clsUsuarios.php");
	$Usuario = new clsUsuarios();
	$Usuario->id_usuario = $_POST['id_usuario'];
    $Usuario->nombre = $_POST['nombre'];
    $Usuario->direccion_origen = $_POST['direccion_origen'];
    $Usuario->direccion_destino = $_POST['direccion_destino'];
    $Usuario->altura = $_POST['altura'];
    $Usuario->peso = $_POST['peso'];
    $Usuario->ancho = $_POST['ancho'];
    $Usuario->pedido = $_POST['pedido'];
    $Usuario->precio_ofrecido = $_POST['precio_ofrecido'];
	$datos = $Usuario->AgregarPedido();
	if($datos > 0){
		echo '<script language="javascript"> alert("Se generó el pedido correctamente.");</script>';
		echo '<script language="javascript"> window.location.href="pedido.php";</script>';
	}
	else{

	}
		echo '<script language="javascript"> alert("No se generó el pedido, revise los campos.");</script>';
		echo '<script language="javascript"> window.location.href="pedido.php";</script>';


?>