
<!--

<form action="welcome.php" method="post">
		Name: <input type = "text" name="name"><br>
		E-mail: <input type = "text" name="email"><br>
		Website: <input type = "text" name="website"><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
		Gender:
		<input type= "radio" name="gender" value="female">Female
		<input type= "radio" name="gender" value="male">Male
		<input type="submit">
		</form>
-->


<?php

	echo "Your name is: " . $_POST["first_name"] . "<br>"; 
	echo "Your last name is: "  .  $_POST["last_name"] . "<br>";
	echo "Your email address is:" . $_POST["email"] . "<br>"; 
	echo "Your Comment is:"  . $_POST["message"]; 
	
?>