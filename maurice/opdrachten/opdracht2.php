<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><label for="height">Height in meters: </label></td>
				<td><input type="text" name="height" required></td>
			</tr>
			<tr>
				<td><label for="weight">Weight in kilograms: </label></td>
				<td><input type="text" name="weight" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Calculate">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>		
	</form>
		
	<?php
		
		//body mass index calculator
		class BMI
		{
			private $height;
			private $weight;
			
			//check if height and weight input are valid values and if so calculates bmi
			public function calculateBMI()
			{
				if(preg_match("/^-?(?:\d+|\d*\.\d+)$/", $_POST["height"]) && preg_match("/^[0-9]+$/", $_POST["weight"]) &&
					$_POST["weight"] < 800 && $_POST["weight"] > 20 && $_POST["height"] > 1.00 && $_POST["height"] < 2.50)
				{
					$this->height = $_POST["height"];
					$this->weight = $_POST["weight"];
					
					$bmi = $this->weight / ($this->height * $this->height);
				
					echo $bmi;
				} else { echo "Not a valid height and/or weight input.";}
			}
		}
		$bmi = new BMI;
		
		if( isset($_POST["submit"]) ) 
		{
			$bmi->calculateBMI();	
		}	
	?>
</article>