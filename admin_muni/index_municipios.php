<?php require_once('../login/conexion.php') ?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Buscador de Municipios</title>
	<!--<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type ="text/css">-->
	<script type="text/javascript" src="include/js/jquery.js"></script>
	<script type="text/javascript" src="include/js/funciones_menu.js"></script>
	<link rel="stylesheet" href="include/estilos_municipios.css">
</head>
<body>
<!--Desde aqui el div que contiene el formulario para agregar municipios-->
	<div class="container">
		<div class="ventana">
			<div class="form">
				<div class="cerrar"><a href='javascript:cerrarVentanaCrearMunicipios();'>Cerrar X</a></div>
				<h1>Formulario Agregar Nuevo Municipio</h1>
				<hr>
				<form id ="form_datos" action="">
					<table>
						<tr>
							<td>Continente : </td>
							<td>
								<select name="continente" id="continente">
									<option value="africa">Africa</option>
									<option value="america" selected="selected">America</option>
									<option value="asia">Asia</option>
									<option value="europa">Europa</option>
									<option value="oceania">Oceania</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>País :</td>
							<td><input type="text" value="Colombia" id="pais">
								<div id="error_pais" class="errores">El nombre del país es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>Departamento :</td>
							<td><input type="text" placeholder="Digite Departamento" id="departamento">
								<div id="error_departamento" class="errores">El nombre del departamento es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>Municipio :</td>
							<td><input type="text" placeholder="Digite Municipio" id="municipio">
								<div id="error_municipio" class="errores">El nombre del municipio es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Grabar Municipio" id="bEnviar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
<!--Hasta aqui el div que contiene el formulario para agregar municipios-->
		<div class="center" id="logo">
			Configuración Paises, Departamentos y Municipios
			<br>
			<img src="imagenes/jonasLogo.png" width="200" alt="Jonas SGD" title="Logo Jonas	">
		</div>
		<div class="form center">
			<form action="" method="post" name="search_form" id="search_form">
				<input type="text" id="search">
			</form>
		</div>
		<div id="resultados"></div>
		<div class="footer center">
			Copyright 2015 - Reservados todos los derechos <br>
			<a href="http://www.google.com.co">www.jonas.com.co</a>
		</div>
	</div>

</body>
</html>