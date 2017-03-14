<!doctype html>
<html>
<head>
<title>
bmi claculator
</title>
<style>
	input{
		width: 50px;
	}
	</style>
</head>
<body>
<?php
$lengte ="";
$gewicht ="";
?>
	<form method="POST">
	<fieldset>
	<legend>BMI berekenen</legend>
		Lengte in cm: <input type="number" name="lengte" min="1" max="250" required>
		<br><br>
		gewicht in kg: <input type="number" name="gewicht" min="1" max="350" step="any" required>
		<br><br>
		<button type="calculate" value="Calculate" name="calculate">Calculate</button>
		<button type="Reset" value="Reset" name="Reset">Reset</button>
		</fieldset>
	</form>
	<br>
	<?php
		if(isset($_POST['lengte'])){
			$lengte = $_POST['lengte']/100;
			$gewicht = $_POST['gewicht'];
			}

		if ($lengte!= null && $gewicht!= null){
			$calculation=round($gewicht/($lengte*$lengte),2);
			echo "Body Mass Index = ".$calculation;
		}
	?>
</body>
<html>