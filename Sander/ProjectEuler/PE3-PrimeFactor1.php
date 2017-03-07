<html>
<body>

<?php

# Define start and end
$start = 2;
#$max = 600851475143;
$max = 100;

# Define array
$prime = array($start);

	# $j is nummer in array $prime[]
	for ($j = 0; $j <= count($prime); $j++) {
	
		# $i is geteste variable
for ($i = $start; $i <= $max; $i++) {
		
		do {
			array_push ($prime, $i);
		}
		
		while ($i % $prime == !0);
	
	}	
	
}

echo "<pre>";
var_dump($prime);
echo "</pre>";

?>

</body>
</html>