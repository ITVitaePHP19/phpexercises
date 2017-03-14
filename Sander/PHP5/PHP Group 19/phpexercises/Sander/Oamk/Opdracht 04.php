<html>
<body>

<?php
if (!isset($_POST['submit'])) {
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
	<tr>
		<td>Gross income:</td>
		<td><input type="text" name="income" size="4" /></td>
		<td>(in valuta)
	</tr>
	<tr>
		<td>Tax percentage:</td>
		<td><input type="text" name="tax" size="4" /></td>
		<td>(percentage)</td>
	</tr>
	<tr>
		<td>Pension payment</td>
		<td>4.30%</td>
		<td>(fixed)</td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Calculate net income" /></td>
	</tr>
</table>
</form>

<?php

}

else {
	$income = $_POST['income'];
	$tax = $_POST['tax'];
	$pension = 0.957;

	// Calculate tax
	$tax = 1 - ($tax / 100);

	// Calculate total
	$total = $income * $tax * $pension;

	echo $total;
}

?>