
<h1> Calculate your optimum heart rate</h1>
<?php
	if(isset($_POST["submit"])){
	
	// mplement simple calculator utility-program, which can be used to calculate person's heart rate limits when doing aerobic ecercise. 
// The formula for calculating hear rate limits is (220-age) * 0.85 for upper limit and (220-age) * 0.65 for lower limit. 
// For example heart rate limits for person aged 30 are (220-30) * 0.85 = 161.5 and (220-30) * 0.65 = 123. Implement user interface and php-sc
	
	
	
	echo   "Maximum heart rate  : " . (220 - $_POST["age"] ) * 0.65 . "<br>"; 
	echo   "Your lowest heart rate : " .  (220 - $_POST["age1"] )  * 0.85; 
	}

?>