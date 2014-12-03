<!Doctype HTML>
<html lang="es">
	<head>
		<title>Colectivos R&iacute;o Cuarto</title>
		<link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon"/> 
		<meta charset="UTF-8">
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
		<meta name="description" content="Colectivos de R&iacute;o cuarto se trata de una aplicaci&oacute;n sencilla y f&aacute;cil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas e interurbanas de la ciudad de R&iacute;o Cuarto, C&oacute;rdoba, Argentina.">
		<meta name="keywords" contenct="HTML5, CSS3, Javascript, PHP">
		<link rel="stylesheet" href="css/enviarEmail.css">	
	</head>	
	<body>
		<div id="agrupar">
		<nav id="menu">
			<ul>
				<li><figure><img src="imagenes/logo.png"></figure></li>
				<li><a href="index.html">inicio</a></li>
				<li><a href="horario.html">Horarios</a></li>
				<li><a href="recorrido.html">Recorridos</a></li>
				<li><a href="acercaDe.html">Acerca de</a></li>
				<li>Contacto</li>
				<li><a href="http://centorbihnos.com/" id="linkPublicidad" target="_blank"><img src="http://www.colectivosriocuarto.com/imagenes/publicidad1.png" id="publi"></a></li>
		</nav>
		<section id="texto">
<?php
	include 'modelo.php';
	mandarEmail();
?>
</section>		
		</div>	
	</body>
</html>