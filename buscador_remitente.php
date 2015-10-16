<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="include/js/jquery.js"></script>
	<script type="text/javascript" src="include/js/funciones_menu.js"></script>
</head>
<body>
	<?php 
		require_once('login/conexion.php');
		$busca_contactos ='';
		if(isset($_POST['busca_contactos'])){
			$busca_contactos = $_POST['busca_contactos'];
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
						echo "<div class='resultado_municipio' id='resultado_municipio'>";
						/*Aqui defino cuál va a ser el comportamiento al dar click sobre el 
						resultado obtenido*/
							
							echo $linea['nombre_contacto']." (".$linea['nit_contacto'].") ";
							/*Etiqueta span para que el nombre del pais y continente tenga otro formato*/
							echo "<span>".$linea['ubicacion_contacto']." - ".$linea['direccion_contacto']."
							</span>";
							/*Fin etiqueta span para que el nombre del pais y continente tenga otro formato*/
						echo "</div>";//cierra div class='resultado_municipio'
					//	$municipio_recibido = $linea['nombre_municipio'];
					}
				}while ($fila=pg_fetch_assoc($registros));
			}elseif($registros>0 && $busca_contactos==''){
				echo "<div> Ingresa un parámetro de búsqueda<div>";
			}else{
				echo "<div> No se han encontrado resultados. Si desea ingresar un nuevo contacto haga click 
				<a href='javascript:abrirVentanaAgregarContacto();'>aqui</a></div>";
			}
	/*Fin recorre el array generado e imprime uno a uno los resultados.*/	
	
	/* Isset de las variables que van a usarse en la consulta*/	
		if(isset($_POST['pais'])){
			$pais = strtoupper($_POST['pais']);
		}
		if(isset($_POST['departamento'])){
			$departamento = strtoupper($_POST['departamento']);
		}	
		if(isset($_POST['municipio'])){
			$municipio = strtoupper($_POST['municipio']);
		}
		$fecha_creacion= date('l jS \of F Y h:i:s A');

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
