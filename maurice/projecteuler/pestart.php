<article>
<table>
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
				"op12" => "Highly divisible triangular number | WORK IN PROGRESS",
				"op13" => "Large sum",
				"op14" => "Longest Collatz sequence",
				"op15" => "Lattice Paths | WORK IN PROGRESS",
				"op16" => "Power digit sum",
				"op17" => "Number letter counts",
				"op18" => "Maximum Path Sum I | WORK IN PROGRESS",
				"op19" => "Counting Sundays",
				"op20" => "Factorial Digit Sum",
				"op22" => "Names scores",
				"op23" => "Non-abundant sums | WORK IN PROGRESS"
			);

			$i = 0;
			
			foreach ($opdrachten as $row => $label) 
				{
					$i++;
					
					echo "<tr><td>Opdracht " . $i . "</td><td>" . $label . "</td><td><input type='radio' name='op' value='" . $row . "' required></td></tr>";
				}	
	?>
	<tr><td></td><td></td><td><br>	<input type="submit" name="submit" value="Show Result"></td></tr>
</form>
</table>
<div id="projecteuler">
<?php
	include "projecteuler.php";

	if(isset($_POST["submit"]))
	{		
		switch($_POST["op"])
		{
			case 'op1':
				multiples3and5();
				break;
			case 'op2':
				fibonacci(33);
				break;
			case 'op3':
				primeFactor();
				break;
			case 'op4':
				palindrome();
				break;
			case 'op5':
				multiples();
				break;
			case 'op6':
				sumSquare();
				break;
			case 'op7':
				prime10001();
				break;
			case 'op8':
				digits();
				break;
			case 'op9':
				pythagoras();
				break;
			case 'op10':
				primeMillions();
				break;
			case 'op11':
				multiGrid();
				break;
			case 'op12':
				echo "Work in Progress";
				break;
			case 'op13':
				largeSum();
				break;
			case 'op14':
				collatz();
				break;
			case 'op15':
				echo "Work in Progress";
				break;
			case 'op16':
				powerDigitSum();
				break;
			case 'op17':
				nlc();
				break;
			case 'op18':
				echo "Work in Progress";
				break;
			case 'op19':
				countingSundays();
				break;
			case 'op20':
				factorialDigitSum(100);
				break;
			case 'op22':
				nameScores();
				break;
			case 'op23':
				echo "Work in Progress";// nonAbundantSums();
				break;
		}
	}
?>
</div>
</article>