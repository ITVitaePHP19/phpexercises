<DOCTYPE! HTML>
<html>
<head><title>BMI Calculator</title></head>




<body>
<H1>BMI-calculator example</H1>
<?php


CalculateBmi($_POST ['heightM'], $_POST ['weightKG']);

function CalculateBmi($height, $weight) {
	$bmi = $weight / ($height * $height);
	
	$bmiround = round ($bmi, 2);
	
	echo 'Body mass index is '. $bmiround;
	
	
}




?>
</body>
</html>

