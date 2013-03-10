<?php

$to = "info@padelurbe.com"; /* Enter your email adress here */

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = str_replace(chr(10), "<br>", $_POST['message']);

$body = "<html><head><title>Formulario de Contacto</title></head><body><br>";
$body .= "Nombre: <b>" . $name . "</b><br>";
$body .= "Email: <b>" . $email . "</b><br><br>";
$body .= "Mensaje:<br><hr><br><b>" . $message . "</b><br>";
$body .= "<br></body></html>";
	
$subject = 'Subscripcion a boletín de noticias: ' . $name;
$header = "De: $to\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8\n";

mail($to, $subject, $body, $header);

?>