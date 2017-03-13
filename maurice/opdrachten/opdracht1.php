<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><label for="input">Dollars: </label></td>
				<td><input type="text" name="input"></td>
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
		//Calculates Dollars to Euro's
		class EuroDollar
		{
			private $dollar;
			private $euro;
			
			//checkf for valid input and then calculates the input to euro's
			public function convertED()
			{
				if(preg_match('/^-?(?:\d+|\d*\.\d+)$/', $_POST["input"]))
				{
					$this->dollar = $_POST["input"];
					$this->euro = $this->dollar * 1.076767;

					echo $this->euro . " euro";
				} else{ echo "Not a valid number."; }
			}
			
		}
		$eD = new EuroDollar;
		
		if( isset($_POST["submit"]) ) 
		{
				$eD->convertED();
		}	
		
	?>
</article>