<?php
	$host = "localhost";
	$puerto = "5432";
	$dbname = "jonas";
	$user = "admin";
	$password = "jonas";
	$conectado = pg_connect("host=$host port=$puerto dbname = $dbname user= $user password = $password") 
				or die 
				("No pude conectarme con la base de datos, revisa las variables de conexión por favor.");
?>

