<article>
	<br>
	<form action="" method="post">
		<input type="text" name="cost">
		<input type="submit" name="calculate" value="Calculate Cost">
	</form>
		
	<?php
		if( isset($_POST["calculate"]) ) 
		{
			include "housingallowance.php";
		}	
	?>
</article>

Implement application, which can be used to calculate housing allowance for student. 
Housing allowance is 80% of reasonable housing cost. Reasonable housing cost is between 33.64252 . 
if cost is under 33.64  no allowance is paid. If cost is over 252 , maximun allowance 201.60  is paid. 
If cost is between 33.64  and 252, allowance is 80%. 