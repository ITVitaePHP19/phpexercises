<h3>BMI berekenen</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Lengte in CM: <input name='length' type='number' size='4' /> <br />
	Gewicht in KG: <input name='weight' type='number' size='4' /> <br />
	<input name='submit' type='submit' value='Show me the money!' />
</form>

<?php

if (isset($_POST['length']) && $_POST['weight']) {
	$length = $_POST['length'];
	$weight = $_POST['weight'];
	$total = ($weight / ($length * $length)) * 10000;
	echo $total;
}
	

else {
	echo 'No value set!';
}

?>