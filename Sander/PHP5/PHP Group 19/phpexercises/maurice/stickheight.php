<?php
	$input = $_POST["input"];
	$value = $_POST["walk"];
	
	if($value == "ccc"){
		$result = $input * 0.9;
	}
	elseif($value == "ccfs"){
		$result = $input * 0.85;
	}
	else{
		$result = $input * 0.68;	
	}
	echo "Height of the stick should be about " . $result . " centimeters";
?>
