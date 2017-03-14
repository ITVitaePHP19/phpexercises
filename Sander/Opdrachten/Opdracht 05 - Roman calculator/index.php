<!doctype html>

<html>

<head>
	<title>Roman calculator</title>
	<link />
	<style type="text/css">
#		body {
#			display: flex;
#			justify-content: center;
#		}
	</style>
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
			<tr>
				<td colspan="2"><h1>Roman calculator</h1></td>
			</tr>
			<tr>
				<td colspan="2">Insert a number you want to convert<br />to Roman numerals and hit 'Calculate!'.</td>
			</tr>
			<tr>
				<td>Number: </td>
				<td><input type="number" name="number" size="10" min="1" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Calculate!" /></td>
			</tr>
		</table>
	</form>
	<br />
<?php

if (isset($_POST['number'])) {
	$number = $_POST['number'];
}
else {
	$number = '';
}

echo integerToRoman($number);

function integerToRoman($integer) {
	// Convert the integer into an integer (just to make sure)
	$integer = intval($integer);
	$result = '';
 
	// Create a lookup array that contains all of the Roman numerals
	$lookup = array(
	'M' => 1000,
	'CM' => 900,
	'D' => 500,
	'CD' => 400,
	'C' => 100,
	'XC' => 90,
	'L' => 50,
	'XL' => 40,
	'X' => 10,
	'IX' => 9,
	'V' => 5,
	'IV' => 4,
	'I' => 1);
 
	foreach ($lookup as $roman => $value) {

		// Determine the number of matches
		$matches = intval($integer / $value);
 
		// Add the same number of characters to the string
		$result .= str_repeat($roman, $matches);
 
		// Set the integer to be the remainder of the integer and the value
		$integer = $integer % $value;
	}
 
	// The Roman numeral should be built, return it
	return $result;
}

?>

</body>

</html>