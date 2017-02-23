<!doctype html>
<html>
<head>
<title>Temperature converter</title>
</head>
<body>
<form method="post">
<fieldset>
<legend>Temperature converter</legend>
	<input type="number" name="input" step="any" required>
	<br>
	<input type="radio" name="unit_of_temperature" value="F_to_C" required>&degF to &degC
	<br>
	<input type="radio" name="unit_of_temperature" value="C_to_F" required>&degC to &degF
	<br>

	<br>
	<button type="submit">Submit</button>
	<button type="submit">Reset</button>
</fieldset>
</form>
<br>
<?php
$input = ($_POST["input"]);
$F = round(($input-32)*5/9, 1);
$C = round($input*5/9+32, 1);
echo $test. "<br>";
if($_POST["unit_of_temperature"]=="F_to_C"){
	$output = $input*$F;
	echo $input . "&deg fahrenheit is " . $output . "&deg celcius.";
}
elseif($_POST["unit_of_temperature"]=="C_to_F"){
	$output = $input*$C;
	echo $input . "&deg celcius is " . $output . "&deg fahrenheit.";
}
else{
	$output = "insert value";
	echo "fill in the fields.";
}
?>
</body>
</html>