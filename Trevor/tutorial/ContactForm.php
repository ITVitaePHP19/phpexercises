<?php
if	(empty($_POST) === false){
		$errors = array();
		
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$message 	= $_POST['message'];
		
		if(empty($name) ===true || empty($email) ===true || empty($message) ===true){
			$errors[] = 'Name, email and message are required!';
		}else{
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$errors[] = 'That\'s not a valid email adress';
			}
			if(ctype_alpha($name) ===false){
				$errors[] = 'Name must only contait letters!';
			}
		}
		
}		
?>	


<!DOCTYPE html>
<html>
	<head>
		<title>A contact form</title>
	</head>
	<body>
		<?php
			if(empty($errors) ===false){
				echo '<ul>';
				foreach($errors as $error){
					echo '<li>', $error, '</li>';
				}
				echo '</ul>';
			}
	?>
	
		<form action="" method="post">
			<p>
				<label for ="name">Name:</label><br>
			
				 <input type="text" name="name" id="name">
			<p>
				<label for="email">Email:</label><br>
				 <input type="text" name="email" id="email">
			</p>
			<p>	
				<label for= "message">Message:</label><br>
				<textarea input name ="message" id="message" id ="message"></textarea>
			</p>
			<p>	 
				<input type="submit" value="Submit">
			</p>
				 
				
				
			</form>
				
				
		
	</body>
</html>