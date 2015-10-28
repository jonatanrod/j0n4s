<?php 
//require_once('../login/conexion.php') 
require_once('login/conexion.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Este es el Buscador de Remitente</title>
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type ="text/css">
	<script type="text/javascript" src="include/js/funciones_contactos.js"></script>
	<link rel="stylesheet" href="include/estilos_entrada.css">
</head>
<body>
	<div class="container center">
		<div class="cerrar">
			<a href="javascript:atras()">Volver Atras</a>
		</div>
		<span id="titulo_radicacion"><strong> Radicación de Entrada</strong></span><br/>
		<div class="contenido">
			<strong> Usted esta radicando un documento que proviene desde</strong> <br/>
			<div class="art">
				<?php
					$nombre_contacto = $_POST['var1'];
					$nit_contacto = $_POST['var2'];
					$ubicacion_contacto = $_POST['var3'];
					$direccion_contacto = $_POST['var4'];
					$telefono_contacto = $_POST['var5'];
					$mail_contacto = $_POST['var6'];
					$representante_legal = $_POST['var7'];
					$codigo_contacto = $_POST['var8'];
				?>		
				<a href='javascript:abrir_ventana_modifica_remitente();' 
				   title="Clic para cambiar datos del remitente">
					<strong>
						<?php 
							echo "$nombre_contacto ($nit_contacto) <br/>"; 
						?>
					</strong>
					<span>
						<?php 
							echo "$ubicacion_contacto / $direccion_contacto <br/> 
							Telefono : $telefono_contacto / $mail_contacto <br/>";
						?>
					</span> 
				</a> 
			</div> <!--Cierra div class="art"-->			
				Dignatario/Persona que está enviando este radicado 
					
				<input type="text" id="dignatario" size = "70" 
					
					<?php  
						$representante_legal_length = strlen($representante_legal);
						if($representante_legal_length > 1){
							echo "value =' $representante_legal ' ";
						}else{
							echo "placeholder = 'No es necesario para persona Natural' ";
						}
					?>
				title="No aplica para persona natural">
		</div> <!--Cierra div class="contenido"-->
		<div class="ventana">
			<div class="form">
				<div class="cerrar"><a href='javascript:cerrar_ventana_modifica_remitente();'>Cerrar X</a></div>
				<h1>Formulario Modificar Datos del Remitente</h1>
				<hr>
				<form id ="form_datos" action="">
					<table border = '0'>
						<tr>
							<td>
								Nombre completo (Incluyendo Sigla) :
							</td>
							<td class="celda">
								<input type="text" value="<?php echo $nombre_contacto ?>" id="nombre_contacto" >			
								<div id="error_nombre_contacto" class="errores">El nombre del contacto es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>
								NIT - Identificación :
							</td>
							<td class="celda">
								<input type="text" value="<?php echo $nit_contacto ?>" id="nit_contacto">
								<div id="error_nit_contacto" class="errores">El NIT o número de identificación del contacto es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>
								Ubicación contacto : 
							</td>
							<td class="celda">
								<input type="text" value= "<?php echo $ubicacion_contacto ?>" id="ubicacion_contacto">
								<div id="error_ubicacion_contacto" class="errores">La ubicación del contacto es obligatoria. 
									En caso que no encuentre una ubicación correcta, comuníquese con el administrador del sistema.
								</div>
							</td>
						</tr>
						<tr>
							<td>
								Dirección del contacto :
							</td>
							<td class ="celda">
								<input type="text" value="<?php echo $direccion_contacto ?>" id="direccion_contacto">
								<div id="error_direccion_contacto" class="errores">La dirección del contacto es obligatoria</div>
							</td>
						</tr>
						<tr>
							<td>
								Telefono del contacto :
							</td>
							<td class ="celda">
								<input type="text" value="<?php echo $telefono_contacto ?>" id="telefono_contacto">
							</td>
						</tr>
						<tr>
							<td>
								Mail del contacto :
							</td>
							<td class ="celda">
								<input type="text" value="<?php echo $mail_contacto ?>" id="mail_contacto">
							</td>
						</tr>
						<tr>
							<td>
								Representante legal :
							</td>
							<td class ="celda">
								<input type="text" id="representante_legal" 					
									<?php  
										$representante_legal_length = strlen($representante_legal);
										if($representante_legal_length > 1){
											echo "value =' $representante_legal ' ";
										}else{
											echo "placeholder = 'No es necesario para persona Natural' ";
										}
									?>
								>	
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Grabar Modificación al remitente" id="bEnviar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div><!--Cierra div class"ventana"-->
	</div><!--Cierra div class"container"-->






	<form id ="form_datos_contacto" action="" method="post">
		<table border ="0">
		
			<tr>
				<td> </td>
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
	<form id="radicacion_entrada" action="" method="post">
		<tr>
			<td>Destinatario : </td>
			<td>
				<input type="text" placeholder="Digite Nombre o Identificación" id="nombre_destinatario" title="Digite la identificación o el nombre del remitente" size ="50">
				<div id="error_nombre_contacto" class="errores">El nombre del contacto es obligatorio</div>
			</td>
		</tr>
	</form>
	
</body>
</html>