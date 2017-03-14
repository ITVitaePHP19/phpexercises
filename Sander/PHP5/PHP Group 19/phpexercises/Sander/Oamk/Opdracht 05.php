<html>
<body>

<?php
if (!isset($_POST['submit'])) {
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
	<tr>
		<td>Capital:</td>
		<td><input type="text" name="capital" size="4" /></td>
		<td>(in valuta)
	</tr>
	<tr>
		<td>Interest:</td>
		<td><input type="text" name="interest" size="4" /></td>
		<td>(percentage)</td>
	</tr>
	<tr>
		<td>Time</td>
		<td><input type="text" name="time" size="4" /></td>
		<td>(in months)</td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Calculate!" /></td>
	</tr>
</table>
</form>

<?php

}

else {
	$capital = $_POST['capital'];
	$interest = $_POST['interest'];
	$time = $_POST['time'];

	$interest = $interest / 100;

	$payment = ($interest / 12 * ((1 + $interest / 12) ** $time)) / (((1 + $interest / 12) ** $time) - 1) * $capital;

	echo $payment;
}

?>