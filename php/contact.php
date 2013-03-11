<?php

$to = "info@padelurbe.com"; /* Enter your email adress here */

$name = trim($_POST['name']);
$address = trim($_POST['address']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = str_replace(chr(10), "<br>", $_POST['message']);

$body = "<html><head><title>Formulario de Contacto</title></head><body><br>";
$body .= "Nombre: <b>" . $name . "</b><br>";
$body .= "Email: <b>" . $email . "</b><br>";
$body .= "Dirección: <b>" . $address . "</b><br>";
$body .= "Teléfono: <b>" . $phone . "</b><br><br>";
$body .= "Mensaje:<br><hr><br><b>" . $message . "</b><br>";
$body .= "<br></body></html>";
	
$subject = 'Formulario de contacto de ' . $name;
$header = "De: $to\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8\n";

mail($to, $subject, $body, $header);

?>