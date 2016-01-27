<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Buscador de Municipios</title>
</head>
<body>
	<?php 
		require_once('../login/conexion.php');
		sleep(1);

		$fecha_modificacion= date('l jS \of F Y h:i:s A');


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
/*Con este isset me aseguro que reciba todas las variables para la modificación de municipios.*/
if(isset($_POST['mod_continente']) && isset($_POST['mod_pais']) && isset($_POST['mod_departamento']) && isset($_POST['mod_municipio'])){
	echo "id continente es $id_continente y las variables para modificacion ".$_POST['mod_continente']."".$_POST['mod_pais']."".$_POST['mod_departamento']."".$_POST['mod_municipio']."<br/>
	y anteriores son ".$_POST['ant_continente']." y ".$_POST['ant_pais']." ". $_POST['ant_departamento']."". $_POST['ant_municipio']."
	";

	$query="update municipios set nombre_continente='".$_POST['mod_continente']."', nombre_pais='".$_POST['mod_pais']."', 
	nombre_departamento='".$_POST['mod_departamento']."', nombre_municipio='".$_POST['mod_municipio']."' , 
	fecha_modificacion='$fecha_modificacion'where nombre_continente='".$_POST['ant_continente']."' 
	and nombre_pais ='".$_POST['ant_pais']."' and nombre_departamento='".$_POST['ant_departamento']."' 
	and nombre_municipio='".$_POST['ant_municipio']."';";

	echo "<br/> aaaaaaaaa <br> $query <br>ffffffff";
}

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

	$usuario = 'Jonas';//Por definir como lo voy a recuperar.

/* Fin isset de las variables que van a usarse en la consulta*/
	/*$query ="INSERT INTO municipios (id_continente, nombre_continente, nombre_pais, 
		nombre_departamento, nombre_municipio, fecha_creacion, creador_municipio) VALUES 
		($id_continente, '$continente','$pais','$departamento','$municipio','$fecha_creacion','$usuario')";
	*/
	//$ejecuta_query = pg_query($conectado,$query) OR DIE ();
	
/*Hasta aqui inicio la interaccion con el formulario de insertar municipio*/

	?>
</body>
</html>
