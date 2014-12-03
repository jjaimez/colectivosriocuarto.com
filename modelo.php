<?php

function recogerDato($campo){
	return isset($_REQUEST[$campo])?$_REQUEST[$campo]:' ';
}

function mandarEmail(){
	$email = recogerDato('email');
	$message = recogerDato('message');
	$nombre = recogerDato('name');
	$asunto = recogerDato('asunto');
	$telefono = recogerDato('telephone');
	$para="softwaretecpro@gmail.com";
	$mensaje="Datos del formulario de contacto\n". "nombre: ".$nombre." \n"."email: ".$email." \n"."telefono: ".$telefono." \n"."Mensaje ".$message;
	mail($para,$asunto,$mensaje) or die("Error!");;
	echo "<p>Gracias por contactarnos</p>";
	echo "<p>Su solicitud ha sido enviada, en breve nos pondremos en contacto con usted.</p>";
}

function getRealIP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
		return $_SERVER['HTTP_CLIENT_IP'];
		
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	
	return $_SERVER['REMOTE_ADDR'];
}

function insertarContador(){
$db_hostname = 'localhost';
$db_database = 'colectivos';
$db_username = 'root';
$db_password= ''; 
$con = mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query = "INSERT INTO contador (fecha,ip) VALUES ('".date('Y-m-d H:i:s')."','".getRealIP()."');";

    if (!mysqli_query($con,$query)) {
        printf("Error: %s\n", mysqli_error($con));
    }
mysqli_close($con);
}

?>