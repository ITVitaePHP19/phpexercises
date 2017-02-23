<DOCTYPE! HTML>
<html>
<head><title>Distance Converter</title></head>




<body>
<H1>Distance Converter Results</H1>
<?php


DistanceConverter($_POST ['conversionDirection'], $_POST ['startValue']);

function DistanceConverter($direction, $startvalue) {
	if ($direction === 'mToKM'){
		$KM = $startvalue * 1.609;
		echo $startvalue. ' miles is '. round($KM, 2) . ' kilometers';
	}
	
	if ($direction === 'kmToM'){
		$M = $startvalue / 1.609;
		echo $startvalue. ' kilometers is '. round($M, 2) . ' miles';
	}
	
}




?>
</body>
</html>

