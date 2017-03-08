<?php
	function mailMessage($email, $header, $content)
	{
		require_once('class.phpmailer.php');
		require_once('config.php');
			
		//Email setup
		$from = "mjwaney@gmail.com";
		$to = $email;
		$subject = $header;
		$message = $content;
		
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
		$mail->Password = "sept09NL!";
		$mail->SetFrom($email);
		$mail->Subject = $subject;
		$mail->Body = $message;
		$mail->AddAddress($to);

		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else
		{
			echo "A mail containing you password has been sent to your email address.";
		}
	}
?>