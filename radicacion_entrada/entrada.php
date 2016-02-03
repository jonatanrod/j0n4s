<?php 
require_once('../login/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Este es el Buscador de Remitente</title>
	<!--<script type="text/javascript" src="../include/js/jquery.js"></script>-->
	<script type="text/javascript" src="include/js/funciones_contactos.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type ="text/css">
	<link rel="stylesheet" href="include/css/estilos_entrada.css">
</head>
<body>
	<div class="container">
		<div class="cerrar">
			<a href="javascript:atras()">Volver Atras</a>
		</div>
		<span id="titulo_radicacion"><strong><h1>Radicación de Entrada</h1></strong></span><br/>
		<div class="contenido">
			<strong> Usted esta radicando un documento que proviene desde</strong> <br/>
			<div class="sugerencia_contacto">
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
					
				<input type="text" id="dignatario" 
					
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
		<div id="ventana_modificar_remitente" class="ventana_modal">
			<div class="formulario_modal">
				<div class="cerrar"><a href='javascript:cerrar_ventana_modifica_remitente();'>Cerrar X</a></div>
				<h1>Formulario Modificar Datos del Remitente</h1>
				<hr>
				<form method="post" id ="modifica_datos_contacto" action="radicacion_entrada/query_contactos.php">
							<input type="hidden" name="tipo_formulario" value="modificar_contacto">

					<table border = '0'>
						<tr>
							<td>
								Nombre completo (Incluyendo Sigla) :
							</td>
							<td class="celda">
								<input type="text" value="<?php echo $nombre_contacto ?>" id="nombre_contacto" name="nombre_contacto" >
								<input type="hidden" value="<?php echo $nombre_contacto ?>" name="ant_nombre_contacto" id="ant_nombre_contacto">			
								<div id="error_nombre_contacto" class="errores">El nombre del contacto es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>
								NIT - Identificación :
							</td>
							<td class="celda">
								<input type="text" value="<?php echo $nit_contacto ?>" id="nit_contacto" name="nit_contacto">
								<input type="hidden" value="<?php echo $nit_contacto ?>" id="ant_nit_contacto" name="ant_nit_contacto">
								<div id="error_nit_contacto" class="errores">El NIT o número de identificación del contacto es obligatorio</div>
							</td>
						</tr>
						<tr>
							<td>
								Ubicación contacto : 
							</td>
							<td class="celda">
								<input type="text" value= "<?php echo $ubicacion_contacto ?>" id="ubicacion_contacto" name="ubicacion_contacto">
								<input type="hidden" value= "<?php echo $ubicacion_contacto ?>" id="ant_ubicacion_contacto" name="ant_ubicacion_contacto">
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
								<input type="text" value="<?php echo $direccion_contacto ?>" id="direccion_contacto" name="direccion_contacto">
								<input type="hidden" value="<?php echo $direccion_contacto ?>" id="ant_direccion_contacto" name="ant_direccion_contacto">
								<div id="error_direccion_contacto" class="errores">La dirección del contacto es obligatoria</div>
							</td>
						</tr>
						<tr>
							<td>
								Telefono del contacto :
							</td>
							<td class ="celda">
								<input type="text" value="<?php echo $telefono_contacto ?>" id="telefono_contacto" name="telefono_contacto">
								<input type="hidden" value="<?php echo $telefono_contacto ?>" id="ant_telefono_contacto" name="ant_telefono_contacto">
							</td>
						</tr>
						<tr>
							<td>
								Mail del contacto :
							</td>
							<td class ="celda">
								<input type="text" value="<?php echo $mail_contacto ?>" id="email_contacto" name="email_contacto">
								<input type="hidden" value="<?php echo $mail_contacto ?>" id="ant_email_contacto" name="ant_email_contacto">
								<div id="error_email_contacto" class="errores">El email del contacto es obligatorio</div>

							</td>
						</tr>
						<tr>
							<td>
								Representante legal :
							</td>
							<td class ="celda">
								<input type="text" id="representante_legal" name="representante_legal" 					
									<?php  
										$representante_legal_length = strlen($representante_legal);
										if($representante_legal_length > 1){
											echo "value =' $representante_legal ' ";
										}else{
											echo "placeholder = 'No es necesario para persona Natural' ";
										}
									?>
								>
								<input type="hidden" value="<?php echo $representante_legal ?>" id="representante_legal" name="representante_legal">	
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Grabar Modificación al Remitente" id="enviar_modificacion_contacto" class="boton_enviar"></td>
						</tr>
					</table>
				</form>
			</div>
		</div><!--Cierra div class"ventana"-->
	</div><!--Cierra div class"container"-->





	
</body>
</html>