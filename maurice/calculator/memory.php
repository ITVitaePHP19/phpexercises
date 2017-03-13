<?php
	//manages calculator memory
	class CalculatorMemory
	{
		//gets button events and does memory calculations and stuff
		function memory()
		{
			if(isset($_POST["press"]))
			{
				switch($_POST["press"])
				{
					case 'M+':
						$_SESSION["memory"] += $_SESSION["save"];
						break;
					case 'M-':
						$_SESSION["memory"] -= $_SESSION["save"];
						break;
					case 'MR':
						$_SESSION["save"] .= $_SESSION["memory"];
						break;
					case 'MC':
						$_SESSION["memory"] = "";
						break;	
				}
			}else{ $_SESSION["memory"] = ""; }
			
			echo $_SESSION["memory"];
		}
	}
	$cM = new CalculatorMemory;
?>