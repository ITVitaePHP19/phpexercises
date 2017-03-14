<html>

<head></head>

<body>

<?php

// set quantity

$quantity = 1000;

// set original and current unit price

$origPrice = 100;

$currPrice = 25;

// calculate difference in price

$diffPrice = $currPrice - $origPrice;

// calculate percentage change in price

$diffPricePercent = ($diffPrice * 100)/$origPrice

// this...

$a = 5;

$a = $a + 10;

// ... is the same as this

//$a = 5;

//$a += 10;

?>

<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td>Quantity</td>
		<td>Cost price</td>
		<td>Current price</td>
		<td>Absolute change in price</td>
		<td>Percent change in price</td>
	</tr>
	<tr>
		<td><?php echo $quantity ?></td>
		<td><?php echo $origPrice ?></td>
		<td><?php echo $currPrice ?></td>
		<td><?php echo $diffPrice ?></td>
		<td><?php echo $diffPricePercent ?>%</td>
	</tr>
</table>
<?php echo $a ?>
</body>

</html>