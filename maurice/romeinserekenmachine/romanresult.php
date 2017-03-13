<?php
	class RomanInput
	{
		function inputProcessing()
		{
			require("calculateRoman.php");
			// phpinfo();
			
			//string session
			if(!isset($_SESSION["saveRoman"]))
			{
				$_SESSION["saveRoman"] = "";
			}
			
			// 1. If key is pressed
			if(isset($_POST["press"]))
			{
				$result = "";
				$operator = array("+", "-", "*", "/");
				$equals = "=";
				
				//clear if pressed
				if($_POST["press"] == "CL")
				{
					$_SESSION["saveRoman"] = "";
					echo $_SESSION["saveRoman"];
				}
				// 2. else concatenate the strings for display
				else
				{
					$result = $_SESSION["saveRoman"] .= $_POST["press"];
										
					//check if first input isn't an operator or equals sign
					if(in_array(substr($result, 0, 1), $operator) || substr($result, 0, 1) == "=")
					{
						$result = str_replace($result, $result, "");
						$_SESSION["saveRoman"] = $result;
					}
					//if there's two operators in succession remove the last one 
					if(in_array(substr($result, -2, 1), $operator) && in_array(substr($result, -1, 1), $operator))
					{
						$result = substr($result, 0, -1);
						$_SESSION["saveRoman"] = $result;
						echo $result . "";
					}
					else
					{
						echo $result . "";
					}
					
				}
				
				//calculate everything when equals sign is pressed
				if(	strpos($result, '=') !== false && (strpos($result, "+") !== false || strpos($result, "-") !== false || 
					strpos($result, "/") !== false || strpos($result, "*") !== false) )
				{
					$parts = preg_split("/([\*\/\-\+\=])/", $result, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
					
					$number1 = $parts[0];
					$operator = $parts[1];
					$number2 = $parts[2];
					
					$n1 = $rC->normalize($number1);
					$n2 = $rC->normalize($number2);
					
					$calc = $n1 . $operator . $n2;
					
					$normalResult = eval("return " . "$calc;");
					
					$romanResult = $rC->romanize($normalResult);
					echo $romanResult;
					
					// var_dump($calc . " = " . $normalResult);
				}
				elseif(strpos($result, '=') !== false)
				{
					$result = substr($result, 0, -1);
					$_SESSION["saveRoman"] = $result;
				}
			}
		}
	}
	$rI = new RomanInput;
?>