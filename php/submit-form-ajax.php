<?php

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
	die('Error: Missing variables');
}

$name=$_POST['name'];
$email=$_POST['email'];
$subject='Catalogo 2015';
$message=$_POST['message'];

$to='aruquipa.alan@gmail.com';

$headers = 'From: '.$email."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$subject = $subject;
$body='Tienes un nuevo mensaje del formulario en tu Catalogo On-line 2015'."\n\n";
$body.='Nombre:  '.$name."\n";
$body.='E-mail:  '.$email."\n";
$body.='Asunto:  '.$subject."\n";
$body.='Mensaje: '."\n".$message."\n\n\n\n Desarrollado por aruquipa.alan@gmail.com";
	
if(mail($to, $subject, $body, $headers)) {
	die('Mail sent');
} else {
	die('Error: Mail failed');
}

?>