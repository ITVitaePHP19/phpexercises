<?php
	//calculates the height your stick should be depending on your height and usage
	class StickHeight
	{
		private $input;
		private $value;
		
		//calculates the height your stick should be depending on your height and usage
		function calculateHeight()
		{
			if(preg_match("/^[0-9]+$/", $_POST["input"]) && $_POST["input"] > 100 && $_POST["input"] < 250)
			{
				$this->input = $_POST["input"];
				$this->value = $_POST["walk"];
				
				if($this->value == "ccc"){
					$result = $this->input * 0.9;
				}
				elseif($this->value == "ccfs"){
					$result = $this->input * 0.85;
				}
				else{
					$result = $this->input * 0.68;	
				}
				echo "Height of the stick should be about " . $result . " centimeters";
			} else{ echo "Not a valid number.";}
		}
	}
	$sH = new StickHeight;

?>
