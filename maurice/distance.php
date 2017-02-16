<?php
	$convert = $_POST["distance"];
	$input = $_POST["input"];
	
	if($convert == "kilometres"){
		$input *= 0.621371192;
		$other = "miles";
	}
	else{
		$input *= 1.609344;
		$other = "kilometres";
	}
	echo $input . " " . $convert . " is " . $_POST["input"] . " " . $other;
?>