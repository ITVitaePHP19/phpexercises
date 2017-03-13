<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><label for="gross">Gross Income: </label></td>
				<td><input type="text" name="gross" required></td>
			</tr>
			<tr>
				<td><label for="tax">Tax Percentage: </label></td>
				<td><input type="text" name="tax"required></td>
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
		//Calculates net salary
		class TaxPercentage
		{
			private $gross;
			private $pension = 0.043;
			
			//checks for valid input and calculates net income by subtracting tax
			function calculateTax()
			{
				if(preg_match("/^[0-9]+$/", $_POST["gross"]) && preg_match("/^[0-9]+$/", $_POST["tax"])
					&& $_POST["tax"] > 0 && $_POST["tax"] < 100)
				{
					$this->gross = $_POST["gross"];
					$tax = $_POST["tax"] / 100;
					
					$grosstax = $this->gross * $tax;
					$grosspension = $this->gross * $this->pension;
					$net = $this->gross - ($grosstax + $grosspension);
					
					echo "Salary: " . $net;
				} else{ echo "Not a valid number.";}
			}
		}
		$tP = new TaxPercentage;
		
		if( isset($_POST["submit"]) ) 
		{
			$tP->calculateTax();			
		}	
	?>
</article>