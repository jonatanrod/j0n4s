<?php 
//require_once('../login/conexion.php') 
require_once('login/conexion.php');?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Buscador de Remitente</title>
	<!--<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type ="text/css">-->
	<!--<script type="text/javascript" src="include/js/jquery.js"></script>-->
	<script type="text/javascript" src="include/js/funciones_contactos.js"></script>
	<link rel="stylesheet" href="include/estilos_entrada.css">
</head>
<body>
<!--Desde aqui el div que contiene el formulario para agregar contacto-->
	<div class="container">
		<div class="agregar_contacto"><!-- ventana-->
			<div class="formulario_agregar_contactos">
				<div class="cerrar"><a href='javascript:cerrarVentanaAgregarContacto();'>Cerrar X</a></div>
				<h1>Formulario Agregar Nuevo Contacto</h1>
				<hr>
				<form id ="form_datos_contacto" action="">
					<table border ="0">
						<tr>
							<td>Nombre completo (Incluyendo Sigla) : </td>
							<td><input type="text" placeholder="Digite Nombre" id="nombre_contacto">
								<div id="error_nombre_contacto" class="errores">El nombre del contacto es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>NIT del contacto (con guiones):</td>
							<td><input type="text" placeholder="Digite NIT" id="nit_contacto">
								<div id="error_pais" class="errores">El número de NIT es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>Ubicación Contacto :</td>
							<td>
								<form action="" method="post" name="ubicacion_contacto" id="ubicacion_contacto">
									<input type="text" placeholder="AMERICA-COLOMBIA-BOGOTA-BOGOTA,D.C." id="busca_contactos" >
								</form>
								<div id="resultados"></div>
								<div id="error_departamento" class="errores">La ubicación geográfica del contacto es obligatoria</div>
							</td>
						</tr>
						<tr>
							<td>Dirección del Contacto :</td>
							<td><input type="text" placeholder="Digite Dirección" id="direccion_contacto">
								<div id="error_municipio" class="errores">La dirección es obligatoria</div>
							</td>
						</tr>
						<tr>
							<td>Teléfono del Contacto :</td>
							<td><input type="text" placeholder="Digite Teléfono" id="telefono_contacto">
								<div id="error_municipio" class="errores">El número de teléfono es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>Correo Electrónico del Contacto :</td>
							<td><input type="text" placeholder="Digite E-mail" id="email_contacto">
								<!-- <div id="error_municipio" class="errores">El nombre del municipio es obligatorio</div> -->
							</td>
						</tr>
						<tr>
							<td>Representante legal del Contacto :</td>
							<td><input type="text" placeholder="No aplica para Persona Natural" id="representante_legal_contacto" size="60">
								<!-- <div id="error_municipio" class="errores">El nombre del municipio es obligatorio</div> -->
							</td>
						</tr>
							<td></td>
							<td><input type="submit" value="Grabar Contacto" id="bEnviar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
<!--Hasta aqui el div que contiene el formulario para agregar contacto-->
		<div class="center" id="logo">
			Módulo de radicación de entrada
			<br>
			<img src="imagenes/jonasLogo.png" width="200" alt="Jonas SGD" title="Logo Jonas	">
			
		</div>
	<!--	<div>
			<form action="" method="post" name="formulario_contactos" id="formulario_contactos">
				Remitente : <input type="text" id="busca_contactos">
			</form>
		</div>
		<div id="resultados"></div> -->
		<div class="footer center">
			Copyright 2015 - Reservados todos los derechos <br>
			<a href="http://www.google.com.co">www.jonas.com.co</a>
		</div>
	</div>

</body>
</html>