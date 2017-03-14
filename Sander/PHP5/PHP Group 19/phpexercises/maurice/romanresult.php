<?php	
	require("calculateRoman.php");
	// phpinfo();
	
	// 1. If key is pressed
	if(isset($_POST["press"]))
	{
		$result;
		
		//string session
		if(!isset($_SESSION["saveRoman"]))
		{
			$_SESSION["saveRoman"] = "";
		}	
		//clear if pressed
		elseif($_POST["press"] == "CL")
		{
			$_SESSION["saveRoman"] = "";
			echo $_SESSION["saveRoman"];
		}
		// 2. else concatenate the strings for display
		else
		{
			$result = $_SESSION["saveRoman"] .= $_POST["press"];
			echo $result . "";
		}	
		
		//calculate everything when equals sign is pressed
		if($_POST["press"] == "=")
		{
			$parts = preg_split("/([\*\/\-\+\=])/", $result, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
						
			$number1 = $parts[0];
			$number2 = $parts[2];
			$operator = $parts[1];
			
			$n1 = normalize($number1);
			$n2 = normalize($number2);
			
			$calc = $n1 . $operator . $n2;
						
			$normalResult = eval("return " . "$calc;");
			
			$romanResult = romanize($normalResult);
			echo $romanResult;
			
			// var_dump($calc . " = " . $normalResult);
		}			
	}
?>