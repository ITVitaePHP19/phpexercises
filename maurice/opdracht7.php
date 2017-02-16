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
					<input type="radio" name="distance" value="kilometres">Kilometres
	  				<input type="radio" name="distance" value="miles"> Miles<br>	  				
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
			include "distance.php";
		}	
	?>
</article>