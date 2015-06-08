<?php
$name = $_POST ['name'];
$email = $_POST ['email'];
$radio = $_POST ['gender'];
$message = $_POST ['problem'];

$formcontent = " From: $name \n email: $email  \n gender: $radio \n problem: $message";
$recipient = "ettieeel@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail ( $recipient, $subject, $formcontent, $mailheader ) or die ( "Error!" );

$url = 'http://pixlhead.com/forms/landing.html';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=' . $url . '">';
?>
