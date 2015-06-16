<?php 


$email = $_POST["email"];
$subject = $_POST["name"]." depuis cyril-py.info";
$message = 	"Objet: ".$_POST["subject"]."\r\n".
			"Message: ".$_POST["message"];

$headers = 	'From: ' . $email . "\r\n" .
     		'Reply-To: ' . $email . "\r\n" .
     		'X-Mailer: PHP/' . phpversion();

if (!mail("contact@cyril-py.info", $subject, $message, $headers))
	echo "NOK";
else
	echo "OK";


?>