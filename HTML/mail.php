<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: $name \n Email: $email \n Message $message";

$recipient = 'nathanhargitt@gmail.com';

$subject = "message from natehargitt.com"

$mailheader = "From: $email \r\n ";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://www.natehargitt.com' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
	"/index.html";
	header('location: ' . $home_url);

?>
