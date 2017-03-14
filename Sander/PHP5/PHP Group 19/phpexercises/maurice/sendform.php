<?php
	require_once('phpmailer/PHPMailerAutoload.php');
	require_once('config.php');
	
	//Get the sumbitted form data
	$first_name = $_POST["firstname"];
	$last_name = $_POST["lastname"];
	$email = $_POST["email"];
	$msg = $_POST["msg"];
	$validmail = 0;
	
	//Check if email is valid
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$validmail = 0;
		echo "Invalid email address";
	}
	else{
		$validmail = 1;
	}
		
	//Email setup
	$from = $email;
	$to = "maurice.waney@itvitaelearning.nl";
	$subject = "Contact form";
	$message = "From: $first_name $last_name <br><br>" .
	"Message:<br><br> $msg";
	
	//Google mail setup
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "mjwaney@gmail.com";
	$mail->Password = $configMailPassword;
	$mail->SetFrom($email);
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AddAddress($to);

	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else if($validmail == 1){
		echo "Message has been sent: <br><br>";
		echo $message;
	}
?>