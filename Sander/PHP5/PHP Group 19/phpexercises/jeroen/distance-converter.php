<!doctype html>
<html>
<head>
<title>Distance converter</title>
</head>
<body>
<form method="post">
<fieldset>
<legend>Distance converter</legend>
	<input type="number" name="count" step="any" required>
	<br>
	<input type="radio" name="unit_of_length" value="mile_to_km" required>mile to km
	<br>
	<input type="radio" name="unit_of_length" value="km_to_mile" required>km to mile
	<br>

	<br>
	<button type="submit">Submit</button>
	<button type="submit">Reset</button>
</fieldset>
</form>
<br>
<?php
if(isset($_POST['count'])){$count = $_POST['count'];}else{$count="";}
$mile = 0.622;
$km = 1.609;

if(isset($_POST['unit_of_length']) && $_POST["unit_of_length"]=="mile_to_km"){
	$output = $count*$km;
	echo $count . " mile is " . $output . " km.";
}
elseif(isset($_POST['unit_of_length']) && $_POST["unit_of_length"]=="km_to_mile"){
	$output = $count*$mile;
	echo $count . " km is " . $output . " miles.";
}
else{
	$output = "insert value";
	echo "fill in the fields.";
}
?>
</body>
</html>