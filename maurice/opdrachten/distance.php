<?php
	//converts miles to kilometres or vice versa
	class ConvertDistance
	{
		private $convert;
		private $input;
		
		
		//converts miles to kilometres or vice versa
		function convert()
		{
			if(preg_match("/^-?(?:\d+|\d*\.\d+)$/", $_POST["input"]))
			{
				$this->convert = $_POST["distance"];
				$this->input = $_POST["input"];
				if($this->convert == "kilometres"){
					$this->input *= 0.621371192;
					$other = "miles";
				}
				else{
					$this->input *= 1.609344;
					$other = "kilometres";
				}
				echo $_POST["input"] . " " . $this->convert . " is " . $this->input . " " . $other;
			} else{ echo "Not a valid number.";}
		}
	}
	$cD = new ConvertDistance;
	
	
?>