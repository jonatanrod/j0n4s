<?php 
//Encabezado para indicar que es una imagen png
	header('Content-Type: image/png');


	$source="../imagenes/plantilla.png";
 //set background
	$image = imagecreatefrompng($source);
	//$image = imagecreate(400, 400);
	$fondo= imagecolorallocate($image, 255, 0, 0);
	$negro= imagecolorallocate($image, 0, 0, 0);
	$fuente="../include/iconos/fonts/arial.ttf";
	$barcode_font ="../include/iconos/fonts/3OF9_NEW";

	$codigo_barras ="201XA000000001";
	$al_contestar = "Al contestar, cite éste número";
	

//Ubicacion del texto. 
//				(imagen, tamaño de fuente, alineacion desde izquierda, alineacion desde arriba, color del texto, fuente, texto)
	imagettftext($image, 23, 0, 70, 170,$negro,$barcode_font,$codigo_barras); //Codigo de Barras
	imagettftext($image, 8, 0, 70, 180,$negro,$fuente,$al_contestar); //Al contestar

	imagepng($image);

 ?>

