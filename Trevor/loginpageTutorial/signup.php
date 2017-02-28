<?php
	include 'header.php';
?>



<?php

	if(isset($_SESSION['id'])){
		echo $_SESSION['id'] . " is currently logged in";
	}else{
		echo "You are not logged in";
	}

?>

<br> <br> <br>

<?php
	if(isset($_SESSION['id'])){
		echo "You are already logged in";
	}else{
		"<form action='includes/signup.inc.php' method='POST'>
		<input type='text' name='first' placeholder='Firstname'> <br>
		<input type='text' name='last' placeholder='Lastname'> <br>
		<input type='text' name='uid' placeholder='Username'> <br>
		<input type='password' name='pwd' placeholder='Password'> <br>
		<button type='submit'>SIGN UP</button>
		</form>";



?>











</body>
</html>