<?php

$to = 'tim@example.com';
$subject = $_POST['reason'];
$message = $_POST['message'];

$sendMail = mail($to, $subject, $message);

if (!$sendMail){
	echo "An error occured sending your message";
} else {
	echo "Message sent!";
}