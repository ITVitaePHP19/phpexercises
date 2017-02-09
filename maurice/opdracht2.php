<article>
	<br>
	<h3>Opdracht 2 - BMI Calculator</h3>
	<br>
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="height">Height in meters: </label></td>
				<td><input type="text" name="height"></td>
			</tr>
			<tr>
				<td><label for="weight">Weight in kilograms: </label></td>
				<td><input type="text" name="weight"></td>
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
		
		if( isset($_POST["submit"]) ) 
		{
			$height = $_POST["height"];
			$weight= $_POST["weight"];
			
			$bmi = $weight / ($height * $height);
			
			echo $bmi;
		}	
	?>
</article>