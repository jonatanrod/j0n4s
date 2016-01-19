<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Buscador de Municipios</title>
</head>
<body>
	<?php 
		require_once('../login/conexion.php');
		sleep(1);
		$permiso_administrador_municipios = 1;/*Falta por definir el permiso en usuarios
		Lo pongo temporalmente 1 pero hay que definirlo.*/
		$formulario_nuevo_contacto = 1; /*Falta por definir como lo traigo desde el formulario
		de agregar contacto */
		$search ='';
		if(isset($_POST['search'])){
			$search = $_POST['search'];
		}

		$consulta = "SELECT * FROM municipios WHERE UPPER(nombre_municipio)
		LIKE UPPER('%".$search."%')	order by nombre_municipio";
		$fila = pg_query($conectado,$consulta);
	/*Calcula el numero de registros que genera la consulta anterior.*/
		$registros= pg_num_rows($fila);
	/*Recorre el array generado e imprime uno a uno los resultados.*/	

			if($registros>0 && $search!=''){
				do{
					for ($i=0;$i<$registros;$i++){
						$linea = pg_fetch_array($fila);
						echo "<div class='art'>";
						/*Aqui defino cuál va a ser el comportamiento al dar click sobre el 
						resultado obtenido*/
							
							echo $linea['nombre_municipio']." (".
								 $linea['nombre_departamento'].") ";
							echo "<span>".$linea['nombre_pais']." - ".$linea['nombre_continente']." "."</span>";
						
							echo "<span class='ver_creador'> / Creado por ".$linea['creador_municipio']." (".
								 $linea['fecha_creacion'].")</span>";
						echo "</div>";//cierra div class='art'
						

					}
				}while ($fila=pg_fetch_assoc($fila));
			}elseif($search===''){
				if($permiso_administrador_municipios==1){
					if($formulario_nuevo_contacto !=1){
						echo " Ingresa un parámetro de búsqueda";
					}		
				}else{
					echo"<script>$('#error_ubicacion_contacto').fadeOut();</script>";
				}
			}else{
				if($permiso_administrador_municipios==1){
					echo "<h2> No se han encontrado resultados</h2><p>Si desea ingresar un nuevo municipio haga click 
					<a href='javascript:abrirVentanaCrearMunicipios();'>aqui</a></p>";
				}else{
					echo"<script>$('#error_ubicacion_contacto').fadeIn();</script>";
				}
				
			}

/*switch para asignar el codigo del continente requerido en la base de datos*/
	
		if(isset($_POST['continente'])){
			$continente = strtoupper($_POST['continente']);
			switch ($continente) {
				case 'AMERICA':
					$id_continente=1;
					break;
				case 'ASIA':
					$id_continente=2;
					break;	
				case 'AFRICA':
					$id_continente=3;
					break;
				case 'EUROPA':
					$id_continente=4;
					break;	
				case 'OCEANIA':
					$id_continente=5;
					break;	
				default:
					$id_continente=1;
					break;
			}
		}
/* Fin switch para asignar el codigo del continente requerido en la base de datos*/	
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
	
	$ejecuta_query = pg_query($conectado,$query) OR DIE ();
	
/*Hasta aqui inicio la interaccion con el formulario de insertar municipio*/

	 ?>
 </body>
</html>
