<?php
	$cost = $_POST["cost"];
	$upper = 33.64252;
	$lower = 33.64000;
	$allowance;
	
	if($cost < $lower)
	{
		$allowance = 0;
	}
	elseif($cost > $upper)
	{
		$allowance = 201.60;
	}
	else $allowance = $cost * .80;
	
	echo $allowance;
?>