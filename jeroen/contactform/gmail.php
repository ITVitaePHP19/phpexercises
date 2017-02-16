<?php
$account="itvitae1@gmail.com";
$password="itvitae12";
$to="jeroen.dejong@itvitaelearning.nl";
$from="jeroen.itvitae@gmail.com";
$from_name="Jeroen de Jong";
$msg="<strong>This is a bold text.</strong>";
$subject="testbericht";

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
$mail->SMTPDebug = 1;
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "E-Mail has been sent";
}
?>
