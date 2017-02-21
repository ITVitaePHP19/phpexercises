<!doctype html>
<html>
<head>
<title>BMI-calculator</title>
</head>
<body>
<h2>BMI-calculator</h2>
<?php
if(isset($_POST['submit'])) {
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	
	if($height > 0 && $weight > 0) {
		echo returnMessageBox("Your BMI is ".calculateBMI($height, $weight),'success');
	}	
	else {
		echo returnMessageBox("Please insert height and weight correctly.",'alert');
	}
}

function calculateBMI($height, $weight) {
	return round($weight / ($height * $height),2);
}

function returnMessageBox($message, $type) {
	return "<div>$message</div>";
}

?>


<form action="bmi.php" method="post">
Height in meters:<input type="number" name="height" placeholder="0,00" step="any" min="0.01" max="2.99"></br>
Weight in kilograms: <input type="number" name="weight" placeholder="000,00" step="any" min="0.01" max="800.00"></br>
<input type="submit" name="submit" value="Calculate"><input type="reset" name="reset" value="Reset">
</form>
</body>
</html>