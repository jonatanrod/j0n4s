<!DOCTYPE html>
<head>
		<meta charset="UTF-8">
		<title>Buscador de remitente</title>
</head>
<body>
	<?php 
		require_once('../login/conexion.php');//cambiar por ../login/conexion.php
		$busca_contactos ='';
		if(isset($_POST['search_remitente'])){
			$busca_contactos = $_POST['search_remitente'];
		}

		$consulta = "SELECT * FROM contactos WHERE UPPER(nombre_contacto)
		LIKE UPPER('%".$busca_contactos."%') or nit_contacto LIKE 
		UPPER('%".$busca_contactos."%')	order by nombre_contacto limit 10";
		$fila = pg_query($conectado,$consulta);
	/*Calcula el numero de registros que genera la consulta anterior.*/
		$registros= pg_num_rows($fila);
	/*Recorre el array generado e imprime uno a uno los resultados.*/	
			if($registros>0 && $busca_contactos!=''){//$busca_contactos= $search
				do{
					for ($i=0;$i<$registros;$i++){
						$linea = pg_fetch_array($fila);

						$nombre_contacto = $linea['nombre_contacto'];
						$nit_contacto = $linea['nit_contacto'];
						$ubicacion_contacto = $linea['ubicacion_contacto'];
						$direccion_contacto = $linea['direccion_contacto'];
						$telefono_contacto = $linea['telefono_contacto'];
						$mail_contacto = $linea['mail_contacto'];
						$representante_legal = $linea['representante_legal'];
						$creador_contacto = $linea['creador_contacto'];
						$codigo_contacto = $linea['codigo_contacto'];
						$fecha_creacion_usuario = $linea['fecha_creacion'];

					echo "<div class='art'>"
						/*Aqui defino cuál va a ser el comportamiento al dar clic sobre el 
						resultado obtenido desde el "a href"*/;

					echo "<a href=\"javascript:cargar_formulario_radicacion_entrada('$nombre_contacto','$nit_contacto','$ubicacion_contacto','$direccion_contacto','$telefono_contacto','$mail_contacto','$representante_legal', '$codigo_contacto')\">";?>
							

					<?php 
						echo'	<span class="titulo">
									<strong>'
									.$nombre_contacto.'
									</strong>'." (".
								 	$nit_contacto.") ".
								"</span>";
						/*Etiqueta span para que el nombre del pais y continente tenga otro formato*/
							echo'<br/><span class="subtitulo">'
									.$ubicacion_contacto." / ".
									 $direccion_contacto." / Telefono : ".
									 $telefono_contacto." / ".
									 $mail_contacto."<br/>".
						/*Funcion php para traducir la fecha (January->Enero)*/
									 "Creado el "; setlocale(LC_TIME, "es_CO.UTF-8");
									 echo strftime("%A %d de %B del %Y");
 						/*Fin funcion php para traducir la fecha (January->Enero)*/
									 echo " por $creador_contacto".
								"</span>";
						/*Fin etiqueta span para que el nombre del pais y continente tenga otro formato*/
						echo "</a>";
						/*Hasta aqui debe ir la etiqueta "a href" para que cuando haga clic*/
						echo "</div>";//cierra div class='resultado_municipio'(art)
					//	$municipio_recibido = $linea['nombre_municipio'];
					}
				}while ($fila=pg_fetch_assoc($fila));
			}elseif($registros>0 && $busca_contactos==''){
				echo "<div> Ingresa un parámetro de búsqueda<div>";
			}else{
				echo "<div> No se han encontrado resultados. Si desea ingresar un nuevo contacto haga click 
				<a href='javascript:abrirVentanaAgregarContacto();'>aqui</a></div>";
			}
	/*Fin recorre el array generado e imprime uno a uno los resultados.*/	
	
	/* Isset de las variables que van a usarse en la consulta*/	
		if(isset($_POST['nombre'])){
			$nombre_contacto = strtoupper($_POST['pais']);
		}
		if(isset($_POST['departamento'])){
			$departamento = strtoupper($_POST['departamento']);
		}	
		if(isset($_POST['municipio'])){
			$municipio = strtoupper($_POST['municipio']);
		}
		setlocale(LC_TIME, "es_CO.UTF-8");
		strftime("%A %d de %B del %Y");
		$fecha_creacion= strftime("%A %d de %B del %Y");
		//date('l jS \of F Y h:i:s A');
		echo "rrrrrrrrrrrrrrrr $fecha_creacion llllllllll";

	$usuario = 'Jonas';//Por definir como lo voy a recuperar.

	/* Fin isset de las variables que van a usarse en la consulta*/


	$query ="INSERT INTO municipios (id_continente, nombre_continente, nombre_pais, 
		nombre_departamento, nombre_municipio, fecha_creacion, creador_municipio) VALUES 
		($id_continente, '$continente','$pais','$departamento','$municipio','$fecha_creacion','$usuario')";
	//echo "HHHHHHHHHHHHHHHHHHHHH  $query HHHH $municipio_recibido HHHHHHHHHHHHHHHHH";
	$ejecuta_query = pg_query($conectado,$query);
	
	/*Hasta aqui inicio la interaccion con el formulario de insertar municipio*/

	 ?>
	 
 </body>
</html>
