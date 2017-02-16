<!DOCTYPE HTML>
<html>
<header><title>Contact</title></header>
<body>


<?php




    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST['email']) ? $_POST["email"] : '';
    $message = isset($_POST['message']) ? $_POST["message"] : '';
    $from = 'From: webtest'; 
    $to = 'bontekoe.s@gmail.com'; 
    $subject = 'contactformtest';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	
	
?>

<?php

//change this submit script to isset?
if (isset($_POST['submit'])) {
	sendMail($subject, $message, $to, $email, $name);
}
?>


<form method="post" action="index.php?pagina=contact">
        
    <label>Name</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
</form>

<style>
label {
    display:block;
    margin-top:20px;
    letter-spacing:2px;
}


/* Centre the page */
.body {
    display:block;
    margin:0 auto;
    width:576px;
}

/* Centre the form within the page */
form {
    margin:0 auto;
    width:459px;
}

/* Style the text boxes */
input, textarea {
	width:439px;
	height:40px;
	background:#efefef;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;
}

textarea {
	height:213px;
	background:url(images/textarea-bg.jpg) right no-repeat #efefef;
}
</style>



</body>
</html>








<?php
//echo 'contact form here';

function  sendMail($subject, $msg, $to, $from, $from_name) {
	

	require_once("phpmailer/class.phpmailer.php");
	$account="itvitae1@gmail.com";
	$password="itvitae12";


	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth= true;
	$mail->Port = 465; // Or 587
	$mail->Username= $account;
	$mail->Password= $password;
	$mail->SMTPSecure = 'ssl';
	$mail->From = $from;
	$mail->FromName= $from_name;

	$mail->Subject = $subject;
	$mail->Body = $msg;
	$mail->addAddress($to);


	if(!$mail->send()){
	 echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
	 echo "E-Mail has been sent";
	}
}





?>






