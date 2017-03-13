<br><form action="" method="post">
	<input type="number" name="luhn">
	<input type="submit" name="submit" value="Submit Number">
</form>

<?php
	//checks if the number you entered is a valid SIM-card number
	class Luhn
	{
		//takes the input as an argument and returns 1 if it is a valid SIM-card number
		function calculateLuhn($num)
		{
			if(!$num)
				return false;
			$num = array_reverse(str_split($num));
			$add = 0;
			foreach($num as $k => $v){
				if($k%2)
					$v = $v*2;
				$add += ($v >= 10 ? $v - 9 : $v);
			}
			return ($add%10 == 0); 
		}
	}
	$ln = new Luhn;

if(isset($_POST["submit"]))
{
	$input = $_POST["luhn"];
	
	$result = $ln->calculateLuhn($input);
	
	if($result == 1)
	{
		echo "This is a correct SIM-card number";
	}
	else 
	{ 
		echo "This is NOT a valid SIM-card number"; 
	}
}
?>