<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><label for="gross">Gross Income: </label></td>
				<td><input type="number" name="gross"></td>
			</tr>
			<tr>
				<td><label for="tax">Tax Percentage: </label></td>
				<td><input type="number" name="tax"></td>
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
			$gross = $_POST["gross"];
			$tax = $_POST["tax"] / 100;
			$pension = 0.043;
			
			$grosstax = $gross * $tax;
			$grosspension = $gross * $pension;
			$net = $gross - ($grosstax + $grosspension);
			
			echo "Salary: " . $net;
		}	
	?>
</article>