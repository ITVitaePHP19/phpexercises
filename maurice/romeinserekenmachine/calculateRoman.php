<?php
	class RomanCalculator
	{
		function normalize($inputR)
		{
			//roman values
			$rI = 1;
			$rV = 5;
			$rX = 10;
			$rL = 50;
			$rC = 100;
			$rD = 500;
			$rM = 1000;
			$calc = 0;
			
			$inputR = str_split($inputR);		
			//replace string operators with their php counterparts
			$numerals = array("I", "V", "X", "L", "C", "D", "M");
			$replace = array($rI, $rV, $rX, $rL, $rC, $rD, $rM );		
			$normals = str_replace($numerals, $replace, $inputR);
					
			// Calculate the string to numbers
			for($i = count($normals); $i > 0; $i--)
			{
				// add the first
				if($i == count($normals))
					$calc += $normals[$i - 1];

				// if current is I add the next one
				elseif($normals[$i] == $rI)
				{
					$calc += $normals[$i - 1];
				}
				// if current is V add the next one unless its I, then subtract
				elseif($normals[$i] == $rV)
				{
					if($normals[$i - 1] == $rI)
						$calc -= $normals[$i - 1];
					else
						$calc += $normals[$i - 1];
				}
				// etc
				elseif($normals[$i] == $rX)
				{
					if($normals[$i - 1] == $rI || $normals[$i - 1] == $rV)
						$calc -= $normals[$i - 1];
					else
						$calc += $normals[$i - 1];
				}
				elseif($normals[$i] == $rL)
				{
					if($normals[$i - 1] == $rI || $normals[$i - 1] == $rV || $normals[$i - 1] == $rX)
						$calc -= $normals[$i - 1];
					else
						$calc += $normals[$i - 1];
				}
				elseif($normals[$i] == $rC)
				{
					if($normals[$i - 1] == $rI || $normals[$i - 1] == $rV || $normals[$i - 1] == $rX || $normals[$i - 1] == $rL )
						$calc -= $normals[$i - 1];
					else
						$calc += $normals[$i - 1];
				}
				elseif($normals[$i] == $rD)
				{
					if($normals[$i - 1] == $rI || $normals[$i - 1] == $rV || $normals[$i - 1] == $rX || $normals[$i - 1] == $rL || $normals[$i - 1] == $rC)
						$calc -= $normals[$i - 1];
					else
						$calc += $normals[$i - 1];
				}
				elseif($normals[$i] == $rM)
				{
					if($normals[$i - 1] == $rI || $normals[$i - 1] == $rV || $normals[$i - 1] == $rX || $normals[$i - 1] == $rL || $normals[$i - 1] == $rC || $normals[$i - 1] == $rD)
						$calc -= $normals[$i - 1];
					else
						$calc += $normals[$i - 1];
				}
			}
			return $calc;
		}
		
		function romanize($inputN)
		{
			//roman values
			$romanvalues = array
				(
					"M" => 1000, 
					"CM" => 900, 
					"DCCC" => 800, 
					"DCC" => 700, 
					"DC" => 600, 
					"D" => 500, 
					"CD" => 400, 
					"CCC" => 300, 
					"CC" => 200, 
					"C" => 100, 
					"XC" => 90, 
					"LXXX" => 80, 
					"LXX" => 70, 
					"LX" => 60, 
					"L" => 50, 
					"XL" => 40, 
					"XXX" => 30, 
					"XX" => 20, 
					"X" => 10, 
					"IX" => 9, 
					"VIII" => 8, 
					"VII" => 7, 
					"VI" => 6, 
					"V" => 5, 
					"IV" => 4, 
					"I" => 1
				); 
				
			$output = "";
			
			foreach ($romanvalues as $numeral => $value)
			{
				while(($inputN - $value) >= 0)
				{	
					$inputN -= $value;
					$output .= $numeral;
				}
			}
			return $output;
		}
	}
	$rC = new RomanCalculator;
?>