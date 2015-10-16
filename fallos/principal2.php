<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--Esta es la parte que se visualiza en la pestaña del navegador-->
	<link rel="shortcut icon" href="../imagenes/jonas.png">
	<title>Jonas Principal</title>
<!--Esta es el href a los archivos que necesito para usar jquery, css-->
	<link rel="stylesheet" href="include/iconos/fonts/style.css">
	<!--<link rel="stylesheet" href="include/estilos.css"> -->
	<link rel="stylesheet" href="include/estilos2.css">
	<script type="text/javascript" src="/include/js/jquery.js"></script>
	<script type="text/javascript" src="include/js/funciones_menu.js"></script>
	
</head>

<body>
	<div id="contenedor_general">

<!--Inicio del encabezado de principal2.php-->
		<div id="encabezado">
			<div class="logo">Jonas SGD</div>
			<div class="boton_menu">
				<a href="#"><span class="icon-menu"></span> Menu</a>
			</div>
			<div class="boton_menu_lateral" id="boton_menu_lateral">
				<a href="#"><span class="icon-menu"></span> Menu Lateral</a>
			</div>
			<nav class="iconos_encabezado">
				<span class="icon-grid">
				<!--class="submenu" = icon-grid e icon-search etc. 
				Para jquery-->
					<ul class="children1">
						<li><span class="icon-users"> Usuarios y Perfiles</span></li>
						<li><span class="icon-tree"> Dependencias</span></li>
						<li><span class="icon-tools"> Configuración de Envíos</span></li>
						<li><span class="icon-cogs"> Configuración de Devoluciones</span></li>
						<li><span class="icon-globe"> Configuración Países-Departamentos-Municipios</span></li>
						<li><span class="icon-thumbs-up"> Generar Paz y Salvo Jonas</span></li>
					</ul>
				</span>	
				<span class="icon-search"></span>
				<span class="icon-bell"></span>
				<span class="icon-graph"></span>
				<span class="icon-user">
					<ul class="children1">
						<li><span class="icon-child"> Modificar Datos de Usuario</span></li>
						<li><span class="icon-circle-with-cross"> Cerrar Sesión</span></li>
					</ul>	
				</span>		
			</nav>
		</div>
<!--Fin del encabezado de principal2.php-->
<!--Inicio del menu_izquierda de principal2.php-->
		<div id="menu_izquierda">
			<div class="permisos">
				<ul>
					<li id="radicacion" class="submenu"><span class="icon-sign-in"></span> Radicación <span class="icon-circle-down"></span>
						<ul class="children">
							<li><span class="icon-sign-in"></span>Radicación de Entrada</li>
							<li><span class="icon-sign-out"></span>Radicación de Salida</li>
							<li><span class="icon-cycle"></span>Radicación Interna</li>
							<li><span class="icon-add-to-list"></span>Radicación Masiva</li>
						</ul>
					<li id="asociar_imagen" class="submenu"><span class="icon-file-empty"></span> Asociar Imagen <span class="icon-circle-down"></span></li>
						<ul class="children">
							<li><span class="icon-file-settings"> Imagen Principal</span></li>
							<li><span class="icon-file-add"> Asociar Imagen Como Anexo</span></li>
						</ul>
					<li id="envios"><span class="icon-sign-out"></span> Envíos <span class="icon-circle-down"></span></li>
						<ul class="children">
							<li><span class="icon-envelope"> Envío de Correo</span></li>
							<li><span class="icon-email2"> Devoluciones de Correo</span></li>
							<li><span class="icon-clipboard"> Impresión de Plantillas</span></li>
						</ul>
					<li id="modificacion"><span class="icon-new-message"></span> Modificiación</li>
				</ul>
			</div>	
			<div class="bandejas">		
				<ul>
					<li id="bandeja_entrada"> Bandeja de Entrada</li>
					<li id="bandeja_salida"> Bandeja de Salida</li>
					<li id="informados"> Documentos Informados</li>
				</ul>
			</div>
		</div>
<!--Fin del menu_izquierda de principal2.php-->
<!--Inicio del contenido de principal2.php-->
		<div id="contenido">
			Contenido
		</div>
<!--Fin del contenido de principal2.php-->
<!--Inicio del pie_pagina de principal2.php-->
		<div id="pie_pagina">
			Pie de pagina
		</div>
<!--Fin del menu_izquierda de principal2.php-->
	</div>
</body>
</html>