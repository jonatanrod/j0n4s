<?php 
require_once('../login/conexion.php');?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Buscador de Remitente</title>
	<!--<script type="text/javascript" src="include/js/jquery.js"></script>-->
	<script type="text/javascript" src="include/js/funciones_contactos.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type ="text/css">
	<link rel="stylesheet" href="include/css/estilos_entrada.css">
</head>
<body>
<!--Desde aqui el div que contiene el formulario para agregar contacto-->
	<div class="container">
		<div id="ventana_agregar_contacto"><!-- ventana-->
			<div class="formulario_agregar_contactos">
				<div class="cerrar"><a href='javascript:cerrarVentanaAgregarContacto();'>Cerrar X</a></div>
						<p>
							<h1>Formulario Agregar Nuevo Contacto</h1>
							<h3>(Entidad - Empresa - Persona Natural)</h3>
						</p>
					<hr>
					<center>	
						<form id ="form_datos_contacto" action="">
							<table border ="0">
								<tr>
									<td>Nombre completo (Incluyendo Sigla) : </td>
									<td class="celda"><input type="text" placeholder="Digite Nombre" id="nombre_contacto" onkeyup="javascript:this.value=this.value.toUpperCase();">
										<div id="sugerencia_nombre_contacto" class="sugerencia"></div>
										<div id="error_nombre_contacto" class="errores">El nombre del contacto es obligatorio</div>
										<div id="contacto_ya_existe" class="errores">El nombre del contacto ya existe, no es posible crear un nuevo contacto con éste nombre</div>
									</td>
								</tr>
								<tr>
									<td>NIT del contacto :</td>
									<td class ="celda"><input type="text" placeholder="Digite NIT" id="nit_contacto" onkeyup="espacios_nit();">
										<div id="sugerencia_nit_contacto" class="sugerencia"></div>
										<div id="error_nit_contacto" class="errores">El número de NIT es obligatorio</div>
										<div id="nit_ya_existe" class="errores">El nombre del contacto ya existe, no es posible crear un nuevo contacto con éste NIT</div>
									</td>
								</tr>
								<tr>
									<td>Ubicación Contacto :</td>
									<td class ="celda"><input type="text" placeholder="BOGOTA, D.C. (BOGOTA) COLOMBIA - AMERICA" id="ubicacion_contacto" onkeyup="javascript:this.value=this.value.toUpperCase();" >
										<div id="sugerencia_ubicacion"></div>
										<div id="error_ubicacion_contacto" class="errores">La ubicación del contacto que ha digitado no es 
											válida. Este campo es obligatorio. En caso que no encuentre una ubicación correcta, comuníquese
											por favor con el administrador del sistema.</div>
		<!--Desde aqui el div que contiene el formulario para agregar municipios-->
										<div class="ventana">
											<div class="form">
											</div>
										</div>
		<!--Hasta aqui el div que contiene el formulario para agregar municipios-->
									</td>
								</tr>
								<tr>
									<td class = "celda">Dirección del Contacto :</td>
									<td class ="celda"><input type="text" placeholder="Digite Dirección" id="direccion_contacto" onkeyup="espacios_direccion();">
										<div id="error_direccion" class="errores">La dirección es obligatoria</div>
									</td>
								</tr>
								<tr>
									<td>Teléfono del Contacto :</td>
									<td class ="celda"><input type="text" placeholder="Digite Teléfono" id="telefono_contacto">
										<div id="error_municipio" class="errores">El número de teléfono es obligatorio</div>
									</td>
								</tr>
								<tr>
									<td>Correo Electrónico del Contacto :</td>
									<td class ="celda"><input type="text" placeholder="Digite E-mail" id="email_contacto" onkeyup="javascript:this.value=this.value.toUpperCase();">
										<!-- <div id="error_municipio" class="errores">El nombre del municipio es obligatorio</div> -->
									</td>
								</tr>
								<tr>
									<td>Representante legal del Contacto :</td>
									<td class="celda"><input type="text" placeholder="No aplica para Persona Natural" id="representante_legal_contacto" onkeyup="javascript:this.value=this.value.toUpperCase();">
										<!-- <div id="error_municipio" class="errores">El nombre del municipio es obligatorio</div> -->
									</td>
								</tr>
									<td></td>
									<td><input type="submit" value="Grabar Contacto" id="grabar_contacto" class="boton_enviar"></td>
								</tr>
							</table>
						</form>
					</center>
				</div>
			</div><!--Cierra .formulario_agregar_contactos -->
		</div><!--Cierra #ventana_agregar_contacto lo que antes era <ventana> -->
<!--Hasta aqui el div que contiene el formulario para agregar contacto-->
<!--Desde aqui los div que se muestran por default al cargar index_entrada.php-->
		<div class="center" id="logo">
			<h1>Módulo de radicación de entrada</h1>		
			<img src="imagenes/jonasLogo.png" width="200" alt="Jonas SGD" title="Logo Jonas	">	
		</div>
		<div class="form center">
		<!--	<form action="" method="post" name="formulario_remitente_radicacion_entrada" id="formulario_remitente_radicacion_entrada" class="form">-->
				Remitente : <input type="text" name ="search_remitente" id="search_remitente">
			<!--</form>-->
		</div>
		<div id="sugerencias_remitente"></div><br/> 
		<div class="footer center">
			Copyright 2015 - Reservados todos los derechos <br>
			<a href="http://www.google.com.co">www.jonas.com.co</a>
		</div>
<!--Hasta aqui los div que se muestran por default al cargar index_entrada.php-->		
	</div><!--Cierra .container -->

</body>
</html>