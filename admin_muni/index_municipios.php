<?php require_once('../login/conexion.php') ?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Buscador de Municipios</title>
	<!--<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type ="text/css">-->
	<!--<script type="text/javascript" src="include/js/jquery.js"></script>-->
	<script type="text/javascript" src="include/js/funciones_municipios.js"></script>
	<link rel="stylesheet" href="include/css/estilos_municipios.css">
</head>
<body>
<!--Desde aqui el div que contiene el formulario para agregar municipios-->
	<div class="container">
		<div id="ventana">
			<div class="form">
				<div class="cerrar"><a href='javascript:cerrarVentanaCrearMunicipios();'>Cerrar X</a></div>
				<h1>Formulario Agregar Nuevo Municipio</h1>
				<hr>
				<form action="admin_muni/query_municipios.php" method="post" id ="formulario_agregar_municipio" name ="formulario_agregar_municipio" >
					<table>
						<tr>
							<td>Continente : </td>
							<td>
								<select name="continente" id="continente" onchange="limpia_formulario_agregar()">
									<option value="AFRICA">Africa</option>
									<option value="AMERICA" selected="selected">America</option>
									<option value="ASIA">Asia</option>
									<option value="EUROPA">Europa</option>
									<option value="OCEANIA">Oceania</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>País :</td>
							<td><input type="text" value="Colombia" name="pais" id="pais">
								<div id="error_pais" class="errores">El nombre del país es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>Departamento :</td>
							<td><input type="text" placeholder="Digite Departamento" name="departamento" id="departamento">
								<div id="error_departamento" class="errores">El nombre del departamento es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>Municipio :</td>
							<td><input type="text" placeholder="Digite Municipio" name="municipio" id="municipio">
								<div id="error_municipio" class="errores">El nombre del municipio es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Grabar Municipio" id="bEnviar" class="boton_enviar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
<!--Hasta aqui el div que contiene el formulario para agregar municipios-->
<!--Desde aqui el div que contiene el formulario para agregar municipios-->	
		<div id="ventana2">
			<div class="form">
				<div class="cerrar"><a href='javascript:cerrarVentanaModificarMunicipios();'>Cerrar X</a></div>
				<h1>Formulario Modificar Municipio</h1>
				<hr>
				<form action="admin_muni/query_municipios.php" method="post" id ="formulario_modificar_municipio" name ="formulario_modificar_municipio" >
					<table>
						<tr>
							<td>Continente : </td>
							<td>
								<select name="mod_continente" id="mod_continente" onchange="limpia_formulario_modificacion()">
									<option value="AFRICA">Africa</option>
									<option value="AMERICA" selected="selected">America</option>
									<option value="ASIA">Asia</option>
									<option value="EUROPA">Europa</option>
									<option value="OCEANIA">Oceania</option>
								</select>
								<input type="hidden" name="ant_continente" id="ant_continente" value=""></input>
							</td>
						</tr>
						<tr>
							<td>País :</td>
							<td><input type="text" value="Colombia" name="mod_pais" id="mod_pais">
								<input type="hidden" name="ant_pais" id="ant_pais" value=""></input>
								<div id="error_mod_pais" class="errores">El nombre del país es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>Departamento :</td>
							<td><input type="text" placeholder="Digite Departamento" name="mod_departamento" id="mod_departamento">
								<input type="hidden" name="ant_departamento" id="ant_departamento" value=""></input>					
								<div id="error_mod_departamento" class="errores">El nombre del departamento es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>Municipio :</td>
							<td>
								<input type="text" placeholder="Digite Municipio" name="mod_municipio" id="mod_municipio">
								<input type="hidden" name="ant_municipio" id="ant_municipio" value=""></input>
								<div id="error_mod_municipio" class="errores">El nombre del municipio es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Grabar Municipio" id="enviar_mod" class="boton_enviar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
<!--Hasta aqui el div que contiene el formulario para modificar municipios-->

		<div class="center" id="logo">
			Configuración Paises, Departamentos y Municipios
			<br>
			<img src="imagenes/jonasLogo.png" width="200" alt="Jonas SGD" title="Logo Jonas	">
		</div>
		<div class="form center">
			<!--<form action="" method="post" name="search_form" id="search_form">-->
				<input type="text" id="search">
			<!--</form>-->
		</div>
		<div id="desplegable_resultados"></div>
		<div id="error_ubicacion_contacto" class="errores">La ubicación del contacto que ha digitado no es 
			válida. Este campo es obligatorio. En caso que no encuentre una ubicación correcta, comuníquese
			por favor con el administrador del sistema.</div>
		<div class="footer center">
			Copyright 2015 - Reservados todos los derechos <br>
			<a href="http://www.google.com.co">www.jonas.com.co</a>
		</div>
	</div>

</body>
</html>