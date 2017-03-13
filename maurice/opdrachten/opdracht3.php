<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><label for="age">Age: </label></td>
				<td><input type="number" name="age"></td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Calculate">
				</td>
			</tr>
		</table>		
	</form>
		
	<?php
		
		//Heart rate calculator
		class HeartRate
		{
			private $age;
			
			//check if you enter a valid age value, and if so calculates upper and lower heart rate limit
			function calculateHeartRate()
			{
				if(preg_match("/^[0-9]+$/", $_POST["age"]) && $_POST["age"] < 150)
				{
					$this->age = $_POST["age"];
					
					$upper = (220 - $this->age) * 0.85;
					$lower = (220 - $this->age) * 0.65;
					
					echo "Upper limit: " . $upper . "<br>";
					echo "Lower limit: " . $lower;
				}else { echo "Not a valid age. ";}
			}
		}
		$hr = new HeartRate;
		
		if( isset($_POST["submit"]) ) 
		{
			$hr->calculateHeartRate();			
		}	
	?>
</article>