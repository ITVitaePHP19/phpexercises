<?php
	$text = str_split($_POST["textchaos"]);

	$one = "class='one'";
	$two = "class='two'";
	$three = "class='three'";
	$four = "class='four'";
	$five = "class='five'";
	$six = "class='six'";
	$seven = "class='seven'";
	$eight = "class='eight'";
	
	$styleArray = array($one, $two, $three, $four, $five, $six, $seven, $eight);
		
	for($i = 0; $i < count($text); $i++)
	{
		echo "<b " . $styleArray[rand(0, 7)] . "'>" . strtoupper($text[$i]) . "</b>";
	}
?>