<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "myeasywebshop@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
ini_set('SMTP', "localhost");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "myeasywebshop@gmail.com");
echo "Thank You!";
?>
