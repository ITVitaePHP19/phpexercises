<?php
// 1.) Fill in all the empty fields with their appropriate settings inbetween ''.
// 2.) Rename this file to mailconfig.inc

//Set mailer to use SMTP
$mail->isSMTP();
//Email server.
$mail->Host = '';
//Enable SMTP authentication
$mail->SMTPAuth = true;
//SMTP Username
$mail->Username = '';
//SMTP password
$mail->Password = '';
//Enable SSL/TSL
$mail->SMTPSecure = '---';
//TCP Port
$mail->Port = ---;
//Addres/name sender
$mail->setFrom('email@example', 'Sender');
//the url before /SAT if needed for local testing
$mailUrl = '';
?>
