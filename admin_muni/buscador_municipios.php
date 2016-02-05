<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Buscador de Municipios</title>
</head>
<body>
	<?php 
		require_once('../login/conexion.php');

		$permiso_administrador_municipios = 1;/*Falta por definir el permiso en usuarios
		Lo pongo temporalmente 1 pero hay que definirlo.*/
		if(isset($_POST['desde_formulario'])){
			$desde_formulario = 1; 
		}
		
	/*Isset que ajax modifica para ejecutar la consulta que despliega las sugerencias */	
		$search ='';
		$busca_muni ='';

		if(isset($_POST['search'])){
			$search = $_POST['search'];
		

			$consulta = "SELECT * FROM municipios WHERE UPPER(nombre_municipio)
			LIKE UPPER('%".$search."%')	order by nombre_municipio limit 10";
			$fila = pg_query($conectado,$consulta);
		/*Calcula el numero de registros que genera la consulta anterior.*/
			$registros= pg_num_rows($fila);
		/*Recorre el array generado e imprime uno a uno los resultados.*/	

			if($registros>0 && $search!=''){
				do{
					for ($i=0;$i<$registros;$i++){
						$linea = pg_fetch_array($fila);

						$nombre_municipio = $linea['nombre_municipio'];
						$nombre_departamento = $linea['nombre_departamento'];
						$nombre_pais = $linea['nombre_pais'];
						$nombre_continente = $linea['nombre_continente'];
						$creador_municipio = $linea['creador_municipio'];
						$fecha_creacion = $linea['fecha_creacion'];
						
						echo "<div class='art'>";
						/*Aqui defino cuál va a ser el comportamiento al dar clic sobre el resultado obtenido desde el "a href"*/;
							if($desde_formulario===1){
								echo "<a href=\"javascript:cargar_modifica_municipio('$nombre_municipio','$nombre_departamento','$nombre_pais','$nombre_continente')\">";
							}else{
								echo "<a href=\"#\"> <script> alert('No, no hay Ahora formulario_nuevo_contacto es '+'$desde_formulario');</script>";
							}
			
						/*Aqui defino cuál va a ser el comportamiento al dar click sobre el 
						resultado obtenido*/			
							echo $nombre_municipio." (".
								 $nombre_departamento.") ";
							echo "<span>".$nombre_pais." - ".$nombre_continente." "."</span>";
							echo "<span class='ver_creador'> / Creado por ".$creador_municipio." (".
								 $fecha_creacion.")</span>";
							echo "</a>";
					/*Hasta aqui debe ir la etiqueta "a href" para que cuando haga clic en cada uno de los resultados*/
						echo "</div>";//cierra div class='art'
					}
				}while ($fila=pg_fetch_assoc($fila));
			}elseif($search===''){
				if($permiso_administrador_municipios==1){
					if($desde_formulario !=1){
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
		}elseif (isset($_POST['busca_municipio'])) {
			$busca_muni = $_POST['busca_municipio'];

			$consulta3 = "SELECT * FROM municipios WHERE UPPER(nombre_municipio)
			LIKE UPPER('%".$busca_muni."%')	order by nombre_municipio limit 5";
		
			$fila3 = pg_query($conectado,$consulta3);
	/*Calcula el numero de registros que genera la consulta anterior.*/
			$registros3= pg_num_rows($fila3);
	/*Recorre el array generado e imprime uno a uno los resultados.*/

			if($registros3>0 && $busca_muni!=''){
				do{
					for ($i=0;$i<$registros3;$i++){
						$linea3 = pg_fetch_array($fila3);

						$nombre_municipio = $linea3['nombre_municipio'];
						$nombre_departamento = $linea3['nombre_departamento'];
						$nombre_pais = $linea3['nombre_pais'];
						$nombre_continente = $linea3['nombre_continente'];
						$creador_municipio = $linea3['creador_municipio'];
						$fecha_creacion = $linea3['fecha_creacion'];
						
						echo "<div class='art' title='Haga click aqui para modificar municipio'>";
						/*Aqui defino cuál va a ser el comportamiento al dar clic sobre el resultado obtenido desde el "a href"*/;
							if($desde_formulario===1){
								echo "<a href=\"javascript:cargar_modifica_municipio('$nombre_municipio','$nombre_departamento','$nombre_pais','$nombre_continente')\">";
							}else{
								echo "<a href=\"#\"> <script> alert('La operación que está solicitando no es posible. Por favor contacte al administrador del sistema.');</script>";
							}
			
						/*Aqui defino cuál va a ser el comportamiento al dar click sobre el 
						resultado obtenido*/			
							echo $nombre_municipio." (".
								 $nombre_departamento.") ";
							echo "<span>".$nombre_pais." - ".$nombre_continente." "."</span>";
							echo "<span class='ver_creador'> / Creado por ".$creador_municipio." (".
								 $fecha_creacion.")</span>";
							echo "</a>";
					/*Hasta aqui debe ir la etiqueta "a href" para que cuando haga clic en cada uno de los resultados*/
						echo "</div>";//cierra div class='art'
					}
				}while ($fila3=pg_fetch_assoc($fila3));
			}elseif($busca_muni===''){
				if($permiso_administrador_municipios==1){
					if($desde_formulario !=1){
						echo " Esta variable es diferente al formulario numero 1. Por favor contacte al administrador del sistema.";
					}		
				}else{
					echo"<script>$('#error_ubicacion_contacto').fadeOut();</script>";
				}
			}else{
				if($permiso_administrador_municipios==1){
					echo "<p> No se han encontrado resultados</p><h3>Este municipio si se puede crear.</h3>";
				}else{
					echo"<script>$('#error_ubicacion_contacto').fadeIn();</script>";
				}				
			}
		}
		
	 ?>
 </body>
</html>
