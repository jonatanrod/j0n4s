<?php 
	include_once 'buscador_remitente.php';

	$usuario = new Usuarios();

	echo json_encode($usuario->buscar_usuario($_GET['term']));
?>