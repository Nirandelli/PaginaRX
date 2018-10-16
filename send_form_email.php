<?php
if(isset($_POST['Correo'])) {
  $captchap = $_POST['g-recaptcha-response'];
  // enviando captchap
  $secret = "6LdMOXUUAAAAAEpVnVzCwLJCRSd_SOieLnfL9cWY"; // requerido

  $ip = $_SERVER["REMOTE_ADDR"]; // requerido

  $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captchap&remoteip=$ip"); // requerido

  echo $var;
  $responseGoogle = json_decode($var, true);

  if ($responseGoogle['success']) {
    echo $responseGoogle;
  }else {
    echo "No pasa";
  }
  return

// Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados

$email_to = "Francisco.marv@rayosxyservicios.com.mx";
// Francisco.marv@rayosxyservicios.com.mx
$email_subject = "Enviado desde la pagina web de RAYOS X Y SERVICIOS INDUSTRIALES S.A. DE C.V.";

function died($error) {
  // si hay algún error, el formulario puede desplegar su mensaje de aviso

  echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";

  echo "Detalle de los errores.<br /><br />";

  echo $error."<br /><br />";

  echo "Por favor corrija estos errores e inténtelo de nuevo.<br /><br />";
  die();
}

// Se valida que los campos del formulairo estén llenos

if(!isset($_POST['Empresa']) ||

  !isset($_POST['Ubicacion']) ||

	!isset($_POST['Nombre']) ||

  !isset($_POST['Correo']) ||

  !isset($_POST['Telefono']) ||

	!isset($_POST['Productos']) ||

	!isset($_POST['Diametro']) ||

	!isset($_POST['Longitud']) ||

	!isset($_POST['Presion']) ||

	!isset($_POST['Fluido']) ||

	!isset($_POST['Conexiones']) ||

	!isset($_POST['Temperatura']) ||

  !isset($_POST['g-recaptcha-response']) ||

  !isset($_POST['Comentario'])) {

    died('Lo sentimos pero parece haber un problema con los datos enviados.');

  }
 //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo

$first_name = $_POST['Empresa']; // requerido

$last_name = $_POST['Ubicacion']; // requerido

$last_name1 = $_POST['Nombre']; // requerido

$last_name2 = $_POST['Puesto']; // requerido

$email_from = $_POST['Correo']; // requerido

$telephone = $_POST['Telefono']; // no requerido

$Productos = $_POST['Productos']; // requerido

$Diametro = $_POST['Diametro']; // requerido

$Longitud = $_POST['Longitud']; // requerido

$Presion = $_POST['Presion']; // requerido

$Fluido = $_POST['Fluido']; // requerido

$Conexiones = $_POST['Conexiones']; // requerido

$Temperatura = $_POST['Temperatura']; // requerido

$message = $_POST['Comentario']; // requerido

$captchap = $_POST['g-recaptcha-response']; // requerido

$error_message = "Error";

//En esta parte se verifica que la dirección de correo sea válida

$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {

  $error_message .= 'La dirección de correo proporcionada no es válida.<br />';

}

//En esta parte se validan las cadenas de texto

$string_exp = "/^[A-Za-z .'-]+$/";

if(!preg_match($string_exp,$first_name)) {

  $error_message .= 'El formato del nombre de la empresa no es válido<br />';

}

if(!preg_match($string_exp,$last_name)) {

  $error_message .= 'La ubicacion no es válido.<br />';

}
if(!preg_match($string_exp,$last_name1)) {

  $error_message .= 'el nombre no es válido.<br />';

}
if(!preg_match($string_exp,$last_name2)) {

  $error_message .= 'el puesto no es válido.<br />';

}

if(!preg_match($string_exp,$last_name2)) {

  $error_message .= 'el producto no es válido.<br />';

}

if (!preg_match($string_exp, $captchap)) {
  $error_message .= 'Validar captchap.<br />';
}

if(strlen($message) < 2) {

  $error_message .= 'El formato del texto no es válido.<br />';

}

if(strlen($error_message) < 0) {

  died($error_message);

}

//A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo

$email_message = "Contenido del Mensaje.\n\n";



function clean_string($string) {

  $bad = array("content-type","bcc:","to:","cc:","href");

  return str_replace($bad,"",$string);

}



$email_message .= "Empresa: ".clean_string($first_name)."\n";

$email_message .= "Ubicacion: ".clean_string($last_name)."\n";

$email_message .= "Nombre: ".clean_string($last_name1)."\n";

$email_message .= "Puesto: ".clean_string($last_name2)."\n";

$email_message .= "E-mail: ".clean_string($email_from)."\n";

$email_message .= "Teléfono: ".clean_string($telephone)."\n\n";

$email_message .= "Productos: ".clean_string($Productos)."\n";

$email_message .= "Diametro: ".clean_string($Diametro)."\n";

$email_message .= "Longitud: ".clean_string($Longitud)."\n";

$email_message .= "Presion: ".clean_string($Presion)."\n";

$email_message .= "Fluido: ".clean_string($Fluido)."\n";

$email_message .= "Conexiones: ".clean_string($Conexiones)."\n";

$email_message .= "Temperatura: ".clean_string($Temperatura)."\n";

//dato encontrado
$email_message .= "Mensaje: ".clean_string($message)."\n";

//Se crean los encabezados del correo

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);


echo "<script>window.location='contactanos.php'</script>";

}

?>
