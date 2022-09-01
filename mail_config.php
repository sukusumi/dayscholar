<?php

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->Username = "testmail.sumi@gmail.com"; // GMAIL username
$mail->Password = "testmail@5"; // GMAIL password
$mail->isHTML(true);
//Typical mail data
$email_from = "sumi.3sm@gmail.com";
$name_from = "[no-reply]Test :: Mail";
$mail->SetFrom($email_from, $name_from);

?>
