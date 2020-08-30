<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$topic = $_POST["topic"];
$message = $_POST["message"];

$email_from = 'byocum1@gmail.com';
$email_subject = "Contact Us Form - $topic";
$email_body = "You have recieved a new message from $name. \n
Here is the message:\n
$message";

$to = "byocum1@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
?>