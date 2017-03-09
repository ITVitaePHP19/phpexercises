<!DOCTYPE html>
<html>
<head>
<title>BMI Calculator</title>
</head>
<body>
<form action="bmicalculator.php" method="POST">
<h1>BMI Calculator</h1>

<?php 

if (isset($_POST['submit']) && $_POST['submit'] == "calculate") {
	bmiCalc();
}
// if name 'submit' is set, run bmiCalc();
// isset instead of ($_SERVER['REQUEST METHOD'] == 'POST')


function bmiCalc() {
	$heigth = $_POST['heigth'];
	$weigth = $_POST['weigth'];
	$bmi = round($weigth / ($heigth * $heigth), 1);
	echo "<p>Your BMI is $bmi</p>";
}
//$heigth equals what is posted ($_POST) in form with name "height"
//$weight equals what is posted ($_POST) in form with name "weigth"
//$bmi is heigth bmi equation rounded up to 1 decimal places away from 0

//phpinfo();
?>

<p>Heigth (meters)</p><input type="number" name="heigth" step="0.01" min="0"><br>
<p>Weigth (kg)</p><input type="number" name="weigth" step="0.01" min="0"><br><br>
<!-- 
step to set 2 decimal places away from 0
min to set a minimum number
-->
<input type="submit" name="submit" value="calculate">
<input type="reset" name="reset" value="reset">
</form>
</body>
</html>