<html>
<body>

<?php

if (isset($_POST['value']) && isset($_POST['temperature'])) {
	
	$temperature = $_POST['temperature'];
	$value = $_POST['value'];

	if ($temperature == 'CtoF') {
		$result = $value * (9 / 5) + 32;

		echo $result;
	}

	elseif ($temperature == 'FtoC') {
		$result = ($value - 32) * (5 / 9);

		echo $result;
	}

}

else {
	echo "Please choose a conversion";
}

?>

</body>
</html>