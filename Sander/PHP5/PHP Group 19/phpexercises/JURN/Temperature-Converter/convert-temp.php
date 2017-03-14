<DOCTYPE! html>

<html>
<?php
if (isset($_POST['convert'])) {
	convertTemperature();
}
function convertTemperature() {
		$input = $_POST['in'];
		$celcius = round(($input-32) * (5 / 9));
		$fahrenheit = round(($input * 1.8)+32);
			
		if ($_POST['temperature'] == "celcius") {
			echo "$input degrees fahrenheit is $celcius degrees celcius";
			}
		
		elseif ($_POST['temperature'] == "fahrenheit") {
			echo "$input degrees celcius is $fahrenheit fahrenheit";
			}
}
?>
<p>
<a href="temperature.html">back to the converter</a>
</p>
</html>