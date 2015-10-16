<head>
<meta charset = "utf-8">
	
	<link href= "../include/estilos.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="../imagenes/jonas.png">
<?php	
session_start();
if(isset($_SESSION["mi_variable"])){
echo "Mostrar mi variable: " . $_SESSION["mi_variable"];
}else{
	echo "No hay ninguna variable creada";
}
?>
</head>



