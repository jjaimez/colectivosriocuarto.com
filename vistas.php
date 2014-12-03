<?php $index = "<!Doctype HTML>
<html lang='es'>
	<head>
		<title>Colectivos R&iacute;o Cuarto</title>
		<link rel='shortcut icon' href='imagenes/icon.ico' type='image/x-icon'/> 
		<meta charset='UTF-8'>
		<meta name='viewport' content='user-scalable=no, width=device-width, initial-scale=1'>
		<meta name='description' content='Colectivos de R&iacute;o cuarto se trata de una aplicaci&oacute;n sencilla y f&aacute;cil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas e interurbanas de la ciudad de R&iacute;o Cuarto, C&oacute;rdoba, Argentina.'>
		<meta name='keywords' contenct='HTML5, CSS3, Javascript, PHP'>
		<link rel='stylesheet' href='css/home.css'>	
		<script type='text/javascript'
		src='http://maps.googleapis.com/maps/api/js?key=AIzaSyCWcDSkf5DDRXiMp-jD-BcFdFEDRHycSeY&sensor=false&libraries=geometry&region=AR&language=es'></script>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'></script>
    <script type='text/javascript' src='js/home.js'> </script>
	</head>
	<body onload='initialize()'>
		<div id='agrupar'>
		<nav id='menu'>
			<ul>
				<li><figure><img src='imagenes/logo.png'></figure></li>
				<li>Inicio</li>
				<li><a href='horario.php'>Horarios</li>
				<li><a href='recorrido.php'>Recorridos</a></li>
				<li><a href='acercaDe.php'>Acerca de</li>
				<li><a href='contacto.php'>Contacto</a></li>
				<li><a href='http://centorbihnos.com/' id='linkPublicidad' target='_blank'><img src='http://www.colectivosriocuarto.com/imagenes/publicidad1.png' id='publi'></a></li>
			</ul>
		</nav>
		<section id='columna'>
			<form >
        		<p>Direcci&oacute;n de origen</p>
        		<input type='text' id='origen' /> <br><br>
        		<p>Direcci&oacute;n de destino</p>
        		<input type='text' id='destino'/><br><br>
        		<p>Cuadras a caminar:</p> <input type='text' id='distancia' size='2' value='10' onkeyup='cambiarRadio()'/><br><br>		
        		<input type='button' value='buscar' onclick='codeAddress()' id='botonBuscar'><br><br>
        	</form>
        	<p>
        		<a href='https://www.facebook.com/TecProSoftware'><img src='imagenes/facebook.png'></a> &nbsp; &nbsp;       
				<a href='https://play.google.com/store/apps/details?id=org.tecpro.colectivos&hl=es_419'><img src='imagenes/googlePlay.png'></a>
			</p>			
			<br>
			<p><label id='resultado'>Resultados:</label></p>
			<br>
			<ul id='listaResultados'>
			</ul>
			<br>
			<center> <p><a href='https://www.facebook.com/CyLjoyas'><img src='imagenes/lcjoyas.png' id='publi3' border='0'></a></p></center> 
			<br>
			<br>
			<p><a href='https://www.facebook.com/pages/Alquiler-de-Trajes-HOMBRES/116858305083482'><img src='http://www.colectivosriocuarto.com/imagenes/traje.png'></a></p>
			<br>	
		</section>	
		</div>
		<label id='pac-input'></label>	
		<div id='map_canvas' name='map_canvas'></div>
	</body>
</html>";


$recorrido = "<!Doctype HTML>
<html lang='es'>
	<head>
		<title>Colectivos R&iacute;o Cuarto</title>
		<link rel='shortcut icon' href='imagenes/icon.ico' type='image/x-icon'/> 
		<meta charset='UTF-8'>
		<meta name='viewport' content='user-scalable=no, width=device-width, initial-scale=1'>
		<meta name='description' content='Colectivos de R&iacute;o cuarto se trata de una aplicaci&oacute;n sencilla y f&aacute;cil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas e interurbanas de la ciudad de R&iacute;o Cuarto, C&oacute;rdoba, Argentina.'>
		<meta name='keywords' contenct='HTML5, CSS3, Javascript, PHP'>
		<link rel='stylesheet' href='css/recorrido.css'>	
	<script type='text/javascript'
      src='http://maps.googleapis.com/maps/api/js?AIzaSyCWcDSkf5DDRXiMp-jD-BcFdFEDRHycSeY&sensor=false&language=es'>
    </script>
    <script type='text/javascript' src='js/recorrido.js'> </script>
	</head>
	<body onload='initialize()'>
		<div id='agrupar'>
		<nav id='menu'>
			<ul>
				<li><figure><img src='imagenes/logo.png'></figure></li>
				<li><a href='index.php'>Inicio</a></li>
				<li><a href='horario.php'>Horarios</a></li>
				<li>Recorridos</li>
				<li><a href='acercaDe.php'>Acerca de</a></li>
				<li><a href='contacto.php'>Contacto</a></li>
				<li><a href='http://centorbihnos.com/' id='linkPublicidad' target='_blank'><img src='http://www.colectivosriocuarto.com/imagenes/publicidad1.png' id='publi'></a></li>
			</ul>
		</nav>
		<section id='columna'>
			<p>L&iacute;nea:  	
        		   		<select name='lineas' id='lineas' onchange='cambiar()'>
						<option selected='selected'></option>
						<option value='1v'>L&iacute;nea 1 Verde</option>
						<option value='1r'>L&iacute;nea 1 Rojo</option>
						<option value='2v'>L&iacute;nea 2 Verde</option>
						<option value='2r'>L&iacute;nea 2 Rojo</option>
						<option value='3'>L&iacute;nea 3</option>
						<option value='4'>L&iacute;nea 4</option>
						<option value='5'>L&iacute;nea 5</option>
						<option value='6'>L&iacute;nea 6</option>
						<option value='7'>L&iacute;nea 7</option>
						<option value='8r'>L&iacute;nea 8 Rojo</option>
						<option value='8v'>L&iacute;nea 8 Verde</option>
						<option value='9v'>L&iacute;nea 9 Verde</option>
						<option value='9r'>L&iacute;nea 9 Rojo</option>
						<option value='10'>L&iacute;nea 10</option>
						<option value='11'>L&iacute;nea 11</option>
						<option value='12'>L&iacute;nea 12</option>
						<option value='13'>L&iacute;nea 13</option>
						<option value='14'>L&iacute;nea 14</option>
						<option value='15'>L&iacute;nea 15</option>
						<option value='16'>L&iacute;nea 16</option>
						<option value='17'>L&iacute;nea 17</option>
						<option value='18'>L&iacute;nea 18</option>
				</select ></p> 
			<br>
			<br>
    		<p id='links'>
        		<a href='https://www.facebook.com/TecProSoftware'><img src='imagenes/facebook.png'></a> &nbsp; &nbsp;       
				<a href='https://play.google.com/store/apps/details?id=org.tecpro.colectivos&hl=es_419'><img src='imagenes/googlePlay.png'></a>				
			</p>
			<br>
			<p><a href='https://www.facebook.com/pages/Alquiler-de-Trajes-HOMBRES/116858305083482'><img src='http://www.colectivosriocuarto.com/imagenes/traje.png'></a></p>
			<br>
			<center> <p><a href='https://www.facebook.com/CyLjoyas'><img src='imagenes/lcjoyas.png' id='publi3' border='0'></a></p></center> 
			<br>	
		</section>
		</div>
		<label id='pac-input'></label>	
		<div id='map_canvas' name='map_canvas'></div>
	</body>
</html>";



$horario = "<!Doctype HTML>
<html lang='es'>
	<head>
		<title>Colectivos R&iacute;o Cuarto</title>
		<link rel='shortcut icon' href='imagenes/icon.ico' type='image/x-icon'/> 
		<meta charset='UTF-8'>
		<meta name='viewport' content='user-scalable=no, width=device-width, initial-scale=1'>
		<meta name='description' content='Colectivos de R&iacute;o cuarto se trata de una aplicaci&oacute;n sencilla y f&aacute;cil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas e interurbanas de la ciudad de R&iacute;o Cuarto, C&oacute;rdoba, Argentina.'>
		<meta name='keywords' contenct='HTML5, CSS3, Javascript, PHP'>
		<link rel='stylesheet' href='css/horario.css'>	
	 	<script type='text/javascript' src='js/horario.js'></script>
	</head>
	<body>
		<div id='agrupar'>
		<nav id='menu'>
			<ul>
				<li><figure><img src='imagenes/logo.png'></figure></li>
				<li><a href='index.php'>Inicio</a></li>
				<li>Horarios</li>
				<li><a href='recorrido.php'>Recorridos</a></li>
				<li><a href='acercaDe.php'>Acerca de</a></li>
				<li><a href='contacto.php'>Contacto</a></li>
				<li><a href='http://centorbihnos.com/' id='linkPublicidad' target='_blank'><img src='http://www.colectivosriocuarto.com/imagenes/publicidad1.png' id='publi'></a></li>
			</ul>
		</nav>
		<section id='columna'>
			<p id='plineas'>L&iacute;nea: 
        		   		<select name='lineas' id='lineas' onchange='cambiar()'>
        		   		<option selected='selected'></option>
						<option value='vistaHorarios/1v.html'>L&iacute;nea 1 Verde</option>
						<option value='vistahorarios/1r.html'>L&iacute;nea 1 Rojo</option>
						<option value='vistahorarios/2v.html'>L&iacute;nea 2 Verde</option>
						<option value='vistahorarios/2r.html'>L&iacute;nea 2 Rojo</option>
						<option value='vistahorarios/3.html'>L&iacute;nea 3</option>
						<option value='vistahorarios/4.html'>L&iacute;nea 4</option>
						<option value='vistahorarios/5.html'>L&iacute;nea 5</option>
						<option value='vistahorarios/6.html'>L&iacute;nea 6</option>
						<option value='vistahorarios/7.html'>L&iacute;nea 7</option>
						<option value='vistahorarios/8r.html'>L&iacute;nea 8 Rojo</option>
						<option value='vistahorarios/8v.html'>L&iacute;nea 8 Verde</option>
						<option value='vistahorarios/9r.html'>L&iacute;nea 9 Rojo</option>
						<option value='vistahorarios/9v.html'>L&iacute;nea 9 Verde</option>
						<option value='vistahorarios/10.html'>L&iacute;nea 10</option>
						<option value='vistahorarios/11.html'>L&iacute;nea 11</option>
						<option value='vistahorarios/12.html'>L&iacute;nea 12</option>
						<option value='vistahorarios/13.html'>L&iacute;nea 13</option>
						<option value='vistahorarios/14.html'>L&iacute;nea 14</option>
						<option value='vistahorarios/15.html'>L&iacute;nea 15</option>
						<option value='vistahorarios/16.html'>L&iacute;nea 16</option>
						<option value='vistahorarios/17.html'>L&iacute;nea 17</option>
						<option value='vistahorarios/18.html'>L&iacute;nea 18</option>
						<option value='vistahorarios/unrchigueras.html'>UNRC - Las Higueras</option>
						<option value='vistahorarios/r4higueras.html'>R&iacute;o Cuarto - Las Higueras</option>
						<option value='vistahorarios/r4holmberg.html'>R&iacute;o Cuarto - Holmberg</option>
						<option value='vistahorarios/r4mar.html'>R&iacute;o Cuarto - Villa Mar&iacute;a</option>
						<option value='vistahorarios/r4mol.html'>R&iacute;o Cuarto - C.Moldes</option>
			</select ></p> <br>
			<br>
    		<p>
        		<a href='https://www.facebook.com/TecProSoftware'><img src='imagenes/facebook.png'></a> &nbsp; &nbsp;       
				<a href='https://play.google.com/store/apps/details?id=org.tecpro.colectivos&hl=es_419'><img src='imagenes/googlePlay.png'></a>
			</p>
			<br>
			<p><a href='https://www.facebook.com/pages/Alquiler-de-Trajes-HOMBRES/116858305083482'><img src='http://www.colectivosriocuarto.com/imagenes/traje.png'></a></p>
			<br>
			<center> <p><a href='https://www.facebook.com/CyLjoyas'><img src='imagenes/lcjoyas.png' id='publi3' border='0'></a></p></center> 
			<br>	
		</section>
		<section id='tabla' height='80%'>
				<iframe src='about:blank' id='destino' name='destino' align='middle' frameborder='0' style='border:0' width='70%' height='80%' scrolling='auto'></iframe>
		</section>		
		</div>	
	</body>
</html>";


$contacto = "<!Doctype HTML>
<html lang='es'>
	<head>
		<title>Colectivos R&iacute;o Cuarto</title>
        <link rel='shortcut icon' href='imagenes/icon.ico' type='image/x-icon'/> 
		<meta charset='UTF-8'>
        <meta name='viewport' content='user-scalable=no, width=device-width, initial-scale=1'>
		<meta name='description' content='Colectivos de R&iacute;o cuarto se trata de una aplicaci&oacute;n sencilla y f&aacute;cil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas e interurbanas de la ciudad de R&iacute;o Cuarto, C&oacute;rdoba, Argentina.'>
		<meta name='keywords' contenct='HTML5, CSS3, Javascript, PHP'>
		<link rel='stylesheet' href='css/contacto.css'>
        <script type='text/javascript'>
        function controlar(){
            if ((document.getElementById('name').value == '') || (document.getElementById('name').value == ' ')){
                alert('Ingrese su nombre por favor');
            } else {
                if ((document.getElementById('email').value == '') || (document.getElementById('email').value == ' ')){
                    alert('Ingrese su email por favor');
                } else {
                    if ((document.getElementById('message').value == '') || (document.getElementById('message').value == ' ')){
                        alert('Ingrese el asunto por favor');
                    } else {
                         if ((document.getElementById('message').value == '') || (document.getElementById('message').value == ' ')){
                            alert('Ingrese el mensaje por favor');
                        } else{
                            document.getElementById('form-contacto').submit();
                        }
                    }
                }               
            }
        }
        </script>
	</head>
	<body>
		<div id='agrupar'>
    		<nav id='menu'>
    			<ul>
    				<li><figure><img src='imagenes/logo.png'></figure></li>
    				<li><a href='index.php'>inicio</a></li>
    				<li><a href='horario.php'>Horarios</a></li>
    				<li><a href='recorrido.php'>Recorridos</a></li>
    				<li><a href='acercaDe.php'>Acerca de</a></li>
                    <li>Contacto</li>
                    <li><a href='http://centorbihnos.com/' id='linkPublicidad' target='_blank'><img src='http://www.colectivosriocuarto.com/imagenes/publicidad1.png' id='publi'></a></li>
    			</ul>
    		</nav>
          <div id='divForm'>
            <form id='form-contacto' method='post' action='mandarEmail.php'>
                <div id='wrapping' class='clearfix'>
                    <section id='aligned'>
                        <input type='text' name='name' id='name' placeholder='Nombre' autocomplete='off' tabindex='1' class='txtinput'>
                        <input type='email' name='email' id='email' placeholder='E-mail' autocomplete='off' tabindex='2' class='txtinput'>
                        <input type='tel' name='telephone' id='telephone' placeholder='WhatsApp (opcional)' tabindex='4' class='txtinput'>
                        <input type='text' name='asunto' id='asunto' placeholder='Asunto' autocomplete='off' tabindex='3' class='txtinput'>
                        <textarea name='message' id='message' placeholder='Mensaje' tabindex='5' class='txtblock'></textarea>
                    </section>               
                </div>
                <section id='buttons'>
                    <input type='reset' name='reset' id='resetbtn' class='resetbtn' value='Reset'>
                    <input type='button' name='submit' id='submitbtn' class='submitbtn' tabindex='7' value='Enviar !' onclick='controlar()'>
                    <br style='clear:both;'>
                </section>
            </form>
            </div>  
		</div>	
	</body>
</html>";


$acercaDe = "<!Doctype HTML>
<html lang='es'>
	<head>
		<title>Colectivos R&iacute;o Cuarto</title>
		<link rel='shortcut icon' href='imagenes/icon.ico' type='image/x-icon'/> 
		<meta charset='UTF-8'>
		<meta name='viewport' content='user-scalable=no, width=device-width, initial-scale=1'>
		<meta name='description' content='Colectivos de R&iacute;o cuarto se trata de una aplicaci&oacute;n sencilla y f&aacute;cil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas e interurbanas de la ciudad de R&iacute;o Cuarto, C&oacute;rdoba, Argentina.'>
		<meta name='keywords' contenct='HTML5, CSS3, Javascript, PHP'>
		<script type='text/javascript' src='js/acercaDe.js'></script>
		<link rel='stylesheet' href='css/acercaDe.css'>
	</head>
	<body>
		<div id='agrupar'>
		<nav id='menu'>
			<ul>
				<li><figure><img src='imagenes/logo.png'></figure></li>
				<li><a href='index.php'>inicio</a></li>
				<li><a href='horario.php'>Horarios</a></li>
				<li><a href='recorrido.php'>Recorridos</a></li>
				<li>Acerca de</li>
				<li><a href='contacto.php'>Contacto</a></li>
				<li><a href='http://centorbihnos.com/' id='linkPublicidad' target='_blank'><img src='http://www.colectivosriocuarto.com/imagenes/publicidad1.png' id='publi'></a></li>
			</ul>
		</nav>
		<section id='texto'>
		<p><a id='enlace1' href='Ajpagina1.php?cod=1'>&#191;Qu&eacute; es Colectivos de R&iacute;o Cuarto?</a></p>
		<p><a id='enlace2' href='Ajpagina1.php?cod=2'>&#191;Qui&eacute;nes son los creadores?</a></p>
		<p><a id='enlace3' href='Ajpagina1.php?cod=3'>&#191;C&oacute;mo surgi&oacute; la idea?</a></p>
		<p><a id='enlace6' href='Ajpagina1.php?cod=6'>&#191;Es f&aacute;cil bajar la aplicaci&oacute;n?</a></p>
		<p><a id='enlace4' href='Ajpagina1.php?cod=4'>&#191;C&oacute;mo reunieron los datos que subieron en la aplicaci&oacute;n?</a></p>
		<p><a id='enlace5' href='Ajpagina1.php?cod=5'>Nos apoyan:</a></p>
		</section>
		<div id='detalles'>Seleccione una pregunta.</div>		
		</div>	

	</body>
</html>";

?>