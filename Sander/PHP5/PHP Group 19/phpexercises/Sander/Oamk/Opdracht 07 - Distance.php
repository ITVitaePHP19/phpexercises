<html>
<body>

<?php

$rate = 1.609;

if (isset($_POST['distance']) && isset($_POST['conv'])) {

	$distance = $_POST['distance'];
	$conv = $_POST['conv'];

	if ($conv == "KMtoM") {
		$result = number_format($distance / $rate, 2);
		
		echo $distance." kilometer is ".$result." miles.";
	}

	elseif ($conv == "MtoKM") {
		$result = number_format($distance * $rate, 2);
		
		echo $distance." miles is ".$result." kilometer.";
	}

}

else {
	echo "Please choose a conversion";
}

?>

</body>
</html>