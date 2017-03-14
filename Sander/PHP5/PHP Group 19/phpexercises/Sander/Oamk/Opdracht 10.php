<?php

$cost = $_POST['cost'];

if ($cost < 33.64) {
	echo "You're under the minimum costs needed for housing allowance.";
}

elseif ($cost > 252) {
	echo "You're above the maximum cost. Your allowance is 201.60 dollar.";
}

else {
	$allowance = $cost * 0.8;
	$rounded = number_format($allowance, 2);
	echo "Your allowance is $".$rounded;
}

?>