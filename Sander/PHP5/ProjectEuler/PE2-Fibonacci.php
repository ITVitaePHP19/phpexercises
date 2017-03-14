<html>
<body>

<?php

$one = 0;
$two = 1;
$total = 0;
$max = 4000000;

for ($test = 0; $total < $max; $test++) {
	$sum = $one + $two;
	$one = $two;
	$two = $sum;

	if ($one % 2 == 0) {
		$total += $one;
	}
}

echo $total;

?>

</body>