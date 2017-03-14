<?php


CalculateToEuros($_POST ['dollars']);

function CalculateToEuros($dollars) {
	$eurosRough = $dollars * 0.940293;
	
	$euros = round ($eurosRough, 2);
	
	echo $dollars.' dollars is '.$euros.' in euros';
	
	
}




?>


