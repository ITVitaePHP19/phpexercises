<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><label for="input1">Input 1: </label></td>
				<td><input type="number" name="input1"></td>
			</tr>
			
			<tr>
				<td>Operator</td>
				<td><select name="operator">
					  <option value="plus">+</option>
					  <option value="minus">-</option>
					  <option value="times">x</option>
					  <option value="division">/</option>
					  <option value="percentage">%</option>
				</select></td> 
			</tr>
			<tr>
				<td><label for="input2">Input 2: </label></td>
				<td><input type="number" name="input2"></td>
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
			$input1 = $_POST["input1"];
			$operator = $_POST["operator"];
			$input2 = $_POST["input2"];
			
			echo $input1;
			switch($operator){
				case 'plus':
					echo $input1 + $input2;
					break;
				case 'minus':
					echo $input1 - $input2;
					break;
				case 'times':
					echo $input1 * $input2;
					break;
				case 'division':
					echo $input1 / $input2;
					break;
				case 'percentage':
					echo ($input1 / 100) * $input2;
					break;
			}
		}		
	?>
</article>