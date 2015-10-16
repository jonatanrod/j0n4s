<html>
<head><meta charset="UTF-8">
	<link rel="shortcut icon" href="../imagenes/jonas.png">
	<title>Jonas Principal</title>
	<link rel="stylesheet" href="include/iconos/fonts/style.css">
	<link rel="stylesheet" href="include/estilos.css"> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<script src= "/include/js/jquery.js"></script>
	
		<script>
			$(document).ready(function(){
				$(window).scroll(function(){
					if($(this).scrollTop()>0){
						$('header').addClass('header2');
					}else{
						$('header').removeClass('header2');
					}
				});
			});

		</script>	
</head>
<body topmargin="0" leftmargin="0" >
	<!--
	<table width="100%" heigth="10" border ="3" cellpadding="0" cellspacing="0" class="eFrameTop" >
		<tr >
			<td width="40"><span class="icon-grid2" border="0" alt=""></td>
			<td width="12.5%"><img img src='../imagenes/jonasLogo.png' width="100%" border="0" alt=""></td>
			<td width="50%"><h1>SGD Jonas </h1><a href="#"></a></td>
			<td width="40"><a href="mod_datos.php?<?=session_name()."=".session_id()."&fechah=$fechah&krd=$krd&info=false"?>" target=mainFrame><img src="<?=$imagenes?>/info.gif" name="Image9" border="0" alt="Modificaci&otilde;n Datos Personales"></a></td>
			<td width="40"><a href="menu/creditos.php?<?=session_name()."=".session_id()."&fechah=$fechah&krd=$krd&info=false"?>" target=mainFrame><img src="<?=$imagenes?>/creditos.gif" name="Image12" border="0" alt="Creditos del Software"></a></td>
			<td width="40"><a href="./estadisticas/vistaFormConsulta.php?<?=session_name()."=".trim(session_id())."&fechah=$fechah"?>" target=mainFrame><img src="<?=$imagenes?>/estadistic.gif" name="Image11" border="0" alt="REPORTES ESTADISTICOS"></a></td>
			<td width="40"><a href='#'onClick="cerrar_session();"><img name="cabezote_r1_c8" src="<?=$imagenes?>/salir.gif" border="0" alt="CERRAR SESION"></td>
			<td width="40"><a href='#'onClick="cerrar_session();"><img name="cabezote_r1_c8" src="<?=$imagenes?>/salir.gif" border="0" alt="CERRAR SESION"></td>
	  	</tr>
	</table>-->
	<header>
		<div class="wrapper">
						
			<div class="logo">Jonas SGD</div>
				
			<nav class="nav_top">	
				<a href="#" class="icon-grid" label="Menu Administración"></a>
				<a href="#" class="icon-search"></a>
				<a href="#" class="icon-bell" ></a>
				<a href="#" class="icon-graph"></a>
				<a href="#" class="icon-user"></a>
			</nav>
			
		</div>
	</header>
	

		<div id="menu1" >
			<div class="lista">
				<div id="contenedor-general-primero" class="contenedor1" OnClick="document.location='#'" style="cursor:pointer">
					<div class="icon-file-empty"></div>
					<p class="texto"><a href="#">Radicación 
						<span class="icon-circle-down"></span>
							<div class="subcontenedor1 id="radicacion_entrada" OnClick="document.location='#'" style="cursor:pointer">
							<div class="icon-sign-in"></div>
							<p class="texto"><a href="#">Radicación de Entrada</p></div>
								
							<div class="subcontenedor1" id="radicacion_salida" OnClick="document.location='#'" style="cursor:pointer">
							<div class="icon-sign-out"></div>
							<p class="texto"><a href="#">Radicación de Salida</p></div>

							<div class="subcontenedor1" id="radicacion_interna" OnClick="document.location='#'" style="cursor:pointer">
							<div class="icon-cycle"></div>
							<p class="texto"><a href="#">Radicación Interna</p></div>

							<div class="subcontenedor1" id="radicacion_masiva" OnClick="document.location='#'" style="cursor:pointer">
							<div class="icon-add-to-list"></div>
							<p class="texto"><a href="#">Radicación Masiva</p></div>

					</a></p>
				</div>

				<div class="contenedor2" OnClick="document.location='#'" style="cursor:pointer">
					<div class="icon-link"></div>
					<p class="texto"><a href="#">Asociar Imagen <span class="icon-circle-down"></span></a></p>
				</div>

				<div class="contenedor3" OnClick="document.location='#'" style="cursor:pointer">
					<div class="icon-email"></div>
					<p class="texto"><a href="#">Envíos <span class="icon-circle-down"></span></a></p>
				</div>
				
				<div class="contenedor4" OnClick="document.location='#'" style="cursor:pointer">
					<div class="icon-new-message"></div>
					<p class="texto"><a href="#">Modificación</span></a></p>
				</div>
				
				<div class="contenedor5" OnClick="document.location='#'" style="cursor:pointer">
					<div class="icon-align-left"></div>
					<p class="texto"><a href="#">Bandeja de Entrada</a></p>
				</div>

				<div class="contenedor6" OnClick="document.location='#'" style="cursor:pointer">
					<div class="icon-align-right"></div>
					<p class="texto"><a href="#">Bandeja de Salida</a></p>
				</div>

				<div class="contenedor7" OnClick="document.location='#'" style="cursor:pointer">
					<div class="icon-info"></div>
					<p class="texto"><a href="#">Documentos Informados</a></p>
				</div>

			
			
			</div>
		</div>

	<arti class="contenido">
	<p>1 Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a sacar & caracteres raros .</p>
	<p>2 Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a sacar & caracteres raros .</p>
	<p>3 Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a sacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	<p>Este es el contenido del section1 para que sepamos exactamente que es lo que va a colocar en la pagina web luego de la modificación que vamos a hacar & caracteres raros .</p>
	
	</section>

</body>
</html>
