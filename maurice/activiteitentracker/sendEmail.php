<?php
	function sendEmail($receiver, $title, $message)
	{
		
		require_once('class.phpmailer.php');
		
		//Get the sumbitted form data
		$name = $_POST["name"];
		$lastname = $_POST["lastname"];
		$password = $_POST["pw"];
		$email = $_POST["email"];
		$code = rand(1000, 9999);
		$verification = 0;
		
		//Add the corresponding email suffix
		if($_POST["itvitaemail"] == "student")
		{
			$email .= "@itvitaelearning.nl";
		}
		else
		{
			$email .= "itvitae.nl";
		}
		
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
		$from = "mjwaney@gmail.com";
		$to = $email;
		$subject = "Activiteitentracker Registratie";
		$message = "From: Administratie <br><br>" .
		"Thanks for your registration " . $name . " " . $lastname . "!<br><br> Your login details:<br><br>Email: " . $email . "<br>Password: " . $password . "<br><br>" . 
		"Please verify your account <a href='http://localhost/index2.php?p=verification'>here</a> and use the verification code below:<br> " . $code;
		
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
		$mail->Password = "dec12NL!";
		$mail->SetFrom($email);
		$mail->Subject = $subject;
		$mail->Body = $message;
		$mail->AddAddress($to);

		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else if($validmail == 1){
			echo "<br>Registration Complete. A confirmation mail has been sent to your email address, please check your mail and follow the instructions to complete your registration";
		}
		
			
	}

?>