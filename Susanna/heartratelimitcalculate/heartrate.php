<DOCTYPE! HTML>
<html>
<head><title>HeartratelimitCalculator</title></head>




<body>
<H1>Heart rate limit calculator example</H1>
<?php


calculateLimits($_POST ['Age']);

function CalculateLimits($Age) {
	$heartUpper = (220-$Age) * 0.85;
	$heartLower = (220-$Age) * 0.65;
	
	echo 'Your upper heart rate limit is '. $heartUpper .'<br>'.'Your lower heart rate limit is '. $heartLower ;
	
	
	
}




?>
</body>
</html>

