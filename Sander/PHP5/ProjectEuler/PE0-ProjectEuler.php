<html>

<head>
	<link href="PE0-ProjectEuler.css" rel="stylesheet" type="text/css" />
</head>

<body>

<h2>Project Euler</h2>

<h3>Problem 1: Divisible by two numbers, between two numbers</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table>
		<tr>
			<td>Divisible by </td>
			<td><input name="first" type="text" size="4" />
			<td>and</td>
			<td><input name="second" type="text" size="4" /></td>
		</tr>
		<tr>
			<td>Between</td>
			<td><input name="min" type="text" size="4" /></td>
			<td>and</td>
			<td><input name="max" type="text" size="4" /></td>
		</tr>
		<tr>
			<td><input type="submit" name="problem1" value="Show result" /></td>
		</tr>
	</table>
</form>

<?php

if (isset($_POST['problem1'])) {
	
	$first = $_POST['first'];
	$second = $_POST['second'];
	$min = $_POST['min'];
	$max = $_POST['max'];
	$total = 0;

	/*for ($test = 1; $test < 1000; $test++) {
		if ($test % 3 == 0) {
		$total += $test;
		}
		elseif ($test % 5 == 0) {
		$total += $test;
		}
	}*/

	for ($test = $min; $test <= $max; $test++) {
		if (is_int($test / $first) || is_int($test / $second)) {
		$total += $test;
		}
	}
	echo $total;
}

else {
	echo "<br />";
}

?>

<h3>Problem 2: Even Fibonacci numbers</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table>
		<tr>
			<td>Starting at </td>
			<td><input name="one" type="text" size="4" />
			<td>and</td>
			<td><input name="second" type="text" size="4" /></td>
		</tr>
		<tr>
			<td>Ending at</td>
			<td><input name="two" type="text" size="4" /></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="submit" name="problem2" value="Show result" /></td>
		</tr>
	</table>
</form>

<?php

if (isset($_POST['problem2'])) {

	$one = $_POST['one'];
	$two = $_POST['two'];
	$max = $_POST['max'];
	$total = 0;
	
	for ($test = 0; $total < $max; $test++) {
		$sum = $one + $two;
		$one = $two;
		$two = $sum;

		if ($one % 2 == 0) {
			$total += $one;
		}
	}
	echo $total;
}

else {
	echo "<br />";
}

?>

<h3>Problem 3: Largest prime factor</h3>

</body>