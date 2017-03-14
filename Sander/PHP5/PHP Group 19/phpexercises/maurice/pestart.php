<?php
	// require_once("projecteuler.php");
?>
<br>
<table class="midtable" id="flagtable">
<form action="" method="post">
	<?php
		$opdrachten = array
			(
				"op1" => "Multiples of 3 and 5", 
				"op2" => "Even Fibonacci numbers", 
				"op3" => "Largest prime factor", 
				"op4" => "Largest palindrome product", 
				"op5" => "Smallest multiple",
				"op6" => "Sum square difference",
				"op7" => "10001st prime",
				"op8" => "Largest product in a series",
				"op9" => "Special Pythagorean triplet",
				"op10" => "Summation of primes",
				"op11" => "Largest product in a grid",
				"op12" => "Highly divisible triangular number",
				"op13" => "Large sum",
				"op14" => "Longest Collatz sequence"
			);

			$i = 0;
			
			foreach ($opdrachten as $row => $label) 
				{
					$i++;
					
					echo "<tr><td>Opdracht " . $i . "</td><td>" . $label . "</td><td><input type='radio' name='op' value='" . $row . "'></td></tr>";
				}	
	?>
	<tr><td></td><td></td><td><br>	<input type="submit" name="submit" value="Show Result"></td></tr>
</form>
</table>

<?php

	// $functies = array("OP1", primeFactor(), );

	// if(isset($_POST["submit"]))
	// {
		
		// $functies[
	// }
?>