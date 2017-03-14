<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><label for="capital">Capital: </label></td>
				<td><input type="number" name="capital"></td>
			</tr>
			<tr>
				<td><label for="interest">Interest: </label></td>
				<td><input type="number" name="interest"></td>
			</tr>
			<tr>
				<td><label for="time">Time(in Years): </label></td>
				<td><input type="number" name="time"></td>
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
			$capital = $_POST["capital"];
			$interest = $_POST["interest"] / 100;
			$time = $_POST["time"] * 12;
			
			$pow = pow(1 + $interest / 12, $time);
			$monthly = (0.05 / 12 * $pow) / ($pow - 1) * $capital;
			
			echo "Monthly payment: " . $monthly;
		}	
	?>
</article>