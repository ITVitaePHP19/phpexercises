<article>
	<br>
	<h3>Opdracht 3 - Heart Rate Calculator</h3>
	<br>
	<form action="" method="post">
		<table>
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
		
		if( isset($_POST["submit"]) ) 
		{
			$age = $_POST["age"];
			
			$upper = (220 - $age) * 0.85;
			$lower = (220 - $age) * 0.65;
			
			echo "Upper limit: " . $upper . "<br>";
			echo "Lower limit: " . $lower;
		}	
	?>
</article>