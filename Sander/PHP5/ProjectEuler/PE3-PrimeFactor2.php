<html>
<body>

<?php

ini_set('memory_limit', '1024M');
ini_set('set_time_limit', '120');

$max = 1000000;
#$max = 600851475143;
$primes = array();

// Define sqrt ceiling
$maxSqrt = ceil(sqrt($max));


function isPrime($num) {
	// 1 is not prime
	if ($num == 1)
		return false;

	// 2 is prime
	if ($num == 2)
		return true;

	// Removes all even numbers
	if ($num % 2 == 0) {
		return false;
	}

	// Check odd numbers, if factor return false
	// The sqrt can be an aproximation, round it to the next highest integer value.
	$ceil = ceil(sqrt($num));

	for ($i = 3; $i <= $ceil; $i = $i + 2) {
		if($num % $i == 0)
			return false;
    }
	
	return true;
}

//Push latest prime into array
for ($i = 1; $i <= $maxSqrt; $i++) {
	if (isPrime($i)) {
		array_push($primes, $i);
	}
}

// Check whether $max is divisible by $primes($j)
for ($j = 0; $j < count($primes); $j++) {
	if ($max % $primes[$j] == 0) {
		$max = $max / $primes[$j];
	}
}

echo $max;
echo "<br />";
echo array_pop($primes);

echo "<pre>";
var_dump($primes);
echo "</pre>";

?>

</body>
</html>