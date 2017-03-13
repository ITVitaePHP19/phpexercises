<?php
	//converts fahrenheit to celsius or vice versa
	class TemperatureConverter
	{
		private $convert;
		private $input;
		
		//converts fahrenheit to celsius or vice versa
		function convert()
		{
			if(preg_match("/^[0-9]+$/", $_POST["input"]))
			{
				$this->convert = $_POST["temp"];
				$this->input = $_POST["input"];
				
				if($this->convert == "fahrenheit"){
					$result = ($this->input - 32) * 5/9;
					$other = "celsius";
				}
				else{
					$result = $this->input * 9/5 + 32;	;
					$other = "fahrenheit";
				}
				echo $_POST["input"] . " " . $this->convert . " is " . $result . " " . $other;
			} else{ echo "Not a valid number.";}
		}
	}
	$tC = new TemperatureConverter;
	

?>
