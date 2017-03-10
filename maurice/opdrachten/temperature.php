<?php
	$convert = $_POST["temp"];
	$input = $_POST["input"];
	
	if($convert == "fahrenheit"){
		$result = ($input - 32) * 5/9;
		$other = "celsius";
	}
	else{
		$result = $input * 9/5 + 32;	;
		$other = "fahrenheit";
	}
	echo $_POST["input"] . " " . $convert . " is " . $result . " " . $other;

?>
