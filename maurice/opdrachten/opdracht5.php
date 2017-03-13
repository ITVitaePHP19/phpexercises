<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><label for="capital">Capital: </label></td>
				<td><input type="text" name="capital"></td>
			</tr>
			<tr>
				<td><label for="interest">Interest: </label></td>
				<td><input type="text" name="interest"></td>
			</tr>
			<tr>
				<td><label for="time">Time(in Years): </label></td>
				<td><input type="text" name="time"></td>
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
		//Calculate how much you have to pay monthly
		class MonthlyPayment
		{
			private $capital;
			private $interest;
			private $iimeInt;
			
			//Calculate how much you have to pay monthly
			function calculatePayment()
			{
				if(preg_match("/^[0-9]+$/", $_POST["capital"]) && preg_match("/^[0-9]+$/", $_POST["interest"])
					&& $_POST["interest"] > 0 && $_POST["interest"] < 100 && preg_match("/^[0-9]+$/", $_POST["time"]))
				{
					$this->capital = $_POST["capital"];
					$this->interest = $_POST["interest"] / 100;
					$this->timeInt = $_POST["time"] * 12;
					
					$pow = pow(1 + $this->interest / 12, $this->timeInt);
					$monthly = (0.05 / 12 * $pow) / ($pow - 1) * $this->capital;
					
					echo "Monthly payment: " . $monthly;
				} else{ echo "Not a valid number.";}
			}
		}
		$mP = new MonthlyPayment;
		
		if( isset($_POST["submit"]) ) 
		{
			$mP->calculatePayment();
		}	
	?>
</article>