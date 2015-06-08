<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['problem'];
$radio = $_POST['gender'];
$checkbox = $_POST['trip'];
$dropdown = $_POST['favorite_day'];
$formcontent=" From: $name \n email: $email \n problem: $message \n gender: $radio \n ice_cream: $checkbox \n favorite_day: $dropdown";
$recipient = "kevin@kevinsartain.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$url = 'http://pixlhead.com/forms/landing.html';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
