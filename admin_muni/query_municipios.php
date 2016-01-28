<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Buscador de Municipios</title>

	<script type="text/javascript">
		function enviar(){
			window.location.href='../principal3.php'
		}
	</script>
</head>
<body>
	<?php 
		$usuario = 'Jonas';/*Este es el usuario que esta realizando la modificacion.
		Por definir como lo voy a recuperar.*/

		require_once('../login/conexion.php');
		sleep(1);

/*Aqui defino la fecha de la transaccion*/
		date_default_timezone_set("America/Bogota");

		echo "La hora es ".date("A %A g:i:s a",time())."<br>";
		setlocale(LC_TIME, "spanish");

		$fecha_modificacion= strftime("Ejemplo 1: %A, %d de %B de %Y");

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
	
	$query="update municipios set nombre_continente='".$_POST['mod_continente']."', nombre_pais='".$_POST['mod_pais']."', 
	nombre_departamento='".$_POST['mod_departamento']."', nombre_municipio='".$_POST['mod_municipio']."' , 
	creador_municipio='$usuario', fecha_creacion='$fecha_modificacion' where nombre_continente='".$_POST['ant_continente']."' 
	and nombre_pais ='".$_POST['ant_pais']."' and nombre_departamento='".$_POST['ant_departamento']."' 
	and nombre_municipio='".$_POST['ant_municipio']."';";

	if(pg_query($conectado,$query)){
		echo "<script> alert('El municipio ha sido modificado correctamente') 
				enviar();
			</script>";
	}else{
		echo "<script> Ocurrió un error al realizar la consulta, por favor revisa e intenta nuevamente.</script>";
	}

	//echo "<br/> aaaaaaaaa <br> $query <br>ffffffff";
}elseif(isset($_POST['continente']) && isset($_POST['pais']) && isset($_POST['departamento']) && isset($_POST['municipio'])){
	
	$query ="INSERT INTO municipios (id_continente, nombre_continente, nombre_pais, 
	nombre_departamento, nombre_municipio, fecha_creacion, creador_municipio) VALUES 
	($id_continente, '".$_POST['continente']."', '".$_POST['pais']."','".$_POST['departamento']."','".
	$_POST['municipio']."','$fecha_modificacion','$usuario');";

	if(pg_query($conectado,$query)){
		echo "<script> alert('El municipio ha sido creado correctamente') 
				enviar();
			</script>";
	}else{
		echo "<script> Ocurrió un error al realizar la consulta, por favor revisa e intenta nuevamente.</script>";
	}
//	echo "<br/> aaaaaaaaa <br> $query <br>ffffffff";
}

	/*
	*/
	
	
/*Hasta aqui inicio la interaccion con el formulario de insertar municipio*/

	?>
</body>
</html>
