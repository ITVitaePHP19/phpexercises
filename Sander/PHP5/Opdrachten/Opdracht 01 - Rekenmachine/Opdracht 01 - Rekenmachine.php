<html>
<body

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table>
	<tr>
		<td><input type="text" name="first" size="4" /></td>
		<td><input type="text" name="second" size="4" /></td>
	</tr>
	<tr>
		<td><input type="radio" name="multiplier" value="+" />+</td>
	</tr>
	<tr>
		<td><input type="radio" name="multiplier" value="-" />-</td>
	</tr>
	<tr>
		<td><input type="radio" name="multiplier" value="*" />*</td>
	</tr>
	<tr>
		<td><input type="radio" name="multiplier" value="/" />/</td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Submit" /></td>
		<td><input type="reset" name="reset" value="Reset" /></td>
	</tr>
</table>

<?php

// Check if 'submit' has been set
if (isset($_POST['submit'])) {

	// Take variables from form
	$first = $_POST['first'];
	$second = $_POST['second'];
	$multiplier = $_POST['multiplier'];

	// Case what multiplier
	switch ($multiplier) {
		case '+':
			$result = $first + $second;
			echo $result;
			break;
		case '-':
			$result = $first - $second;
			echo $result;
			break;
		case '*':
			$result = $first * $second;
			echo $result;
			break;
		case '/':
			$result = $first / $second;
			echo $result;
			break;
		default:
			echo "Please select a multiplier.";
	}

}

?>

</body>
</html>