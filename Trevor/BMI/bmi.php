<h1>BMI calculator</h1>
<?php
	if(isset($_POST["submit"])){
	
	echo   "Your BMI is : " . ($_POST["number2"]) / (($_POST["number1"]) * ($_POST["number1"])); 
	
	}

?>