<h3>Koers omrekenen</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Calculate in Euros <input name="dollar" type="text" size="4" />
<br />
Calculate in Dollars <input name="euro" type="text" size="4" />
<br />
<input type="submit" name="submit" value="Submit" />
</form>

<?php

$koers = 0.69;

if (isset($_POST['submit'])) {
	
	if (isset($_POST['dollar']) && $_POST['dollar'] > 0) {
		$dollar = $_POST['dollar'];
		$total = $dollar / $koers;
	}
	
	elseif (isset($_POST['euro']) && $_POST['euro'] > 0) {
		$euro = $_POST['euro'];
		$total = $euro * $koers;
	}
	
	else {
		echo 'This is not a number.';
		$total = '';
	}
	
	echo $total;
}

else {
	echo 'No value set!';
}

?>