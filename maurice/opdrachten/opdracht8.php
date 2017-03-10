<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td>
					<label for="input">Convert: </label>
					<input type="text" name="input"><br>
				</td>
				<td>
					<input type="radio" name="temp" value="fahrenheit">Fahrenheit
	  				<input type="radio" name="temp" value="celsius"> Celsius<br>	  				
				</td>
			</tr>
			<tr><td></td>
				<td>
					<input type="submit" name="submit" value="Convert">	
					<input type="reset" name="reset" value="Reset">					
				</td>
			</tr>
		</table>		
	</form>
		
	<?php
		if( isset($_POST["submit"]) ) 
		{
			include "temperature.php";
		}	
	?>
</article>

