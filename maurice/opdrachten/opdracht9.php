<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td>
					<label for="input">Your height (in centimeters): </label>
					<input type="text" name="input" required><br>
					Cross-country classical<input type="radio" name="walk" value="ccc" required><br>
	  				Cross-country free-style<input type="radio" name="walk" value="ccfs">Cross-country free-style<br>	  				
	  				Nordic walk<input type="radio" name="walk" value="nw"><br>	  				
					<input type="submit" name="submit" value="Calculate">	
					<input type="reset" name="reset" value="Reset">					
				</td>
			</tr>
		</table>		
	</form>
		
	<?php
		if( isset($_POST["submit"]) ) 
		{
			include "stickheight.php";
			$sH->calculateHeight();
		}	
	?>
</article>