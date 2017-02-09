<article>
	<br>
	<h3>Opdracht 1 - Currency Calculator</h3>
	<br>
	<form action="" method="post">
		<table>
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
		
		if( isset($_POST["submit"]) ) 
		{
			$dollar = $_POST["input"];
			$euro = $dollar * 1.076767;
			
			echo $euro;
		}	
	?>
</article>