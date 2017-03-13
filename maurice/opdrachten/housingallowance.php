<?php
	//calculates allowance depending on your cost?
	class HousingAllowance
	{
		private $cost;
		private $allowance;
		
		//calculates allowance depending on your cost?
		function calculateAllowance()
		{
			if(preg_match("/^-?(?:\d+|\d*\.\d+)$/", $_POST["cost"]))
			{
				$this->cost = $_POST["cost"];
				$upper = 33.64252;
				$lower = 33.64000;
				$this->allowance;
				
				if($this->cost < $lower)
				{
					$this->allowance = 0;
				}
				elseif($this->cost > $upper)
				{
					$this->allowance = 201.60;
				}
				else $this->allowance = $this->cost * .80;
				
				echo $this->allowance;
			} else{ echo "Not a valid number.";}
		}
	}
	$hA = new HousingAllowance;
?>