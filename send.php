<?php 
error_reporting(0); 
$Empresa = $_POST['Empresa']; 
$Ubicacion = $_POST['Ubicacion']; 
$nombre = $_POST['Nombre']; 
$puesto = $_POST['Puesto']; 
$telefono=$_POST['Telefono']; 
$correo_electronico= $_POST['Correo']; 
$mensaje=$_POST['Comentario']; 
$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje es de la empresa " . $Empresa . " \r\n"; 
$mensaje = "Su uubicacion es " . $Ubicacion . " \r\n"; 
$mensaje = "fue enviado por " . $nombre . " \r\n"; 
$mensaje = "Su puesto es" . $puesto . " \r\n"; 
$mensaje .= "Su Numero telefonico es: " . $telefono . " \r\n"; 
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n"; 
$mensaje .= "Mensaje " . $_POST['comentario'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'jose.acopa.martinez@gmail.com'; 
$asunto = 'Pagina-web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 
