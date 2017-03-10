<br><form action="" method="post">
	<input type="number" name="luhn">
	<input type="submit" name="submit" value="Submit Number">
</form>

<?php

function luhn($num){
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

if(isset($_POST["submit"]))
{
	$luhn = $_POST["luhn"];
	
	$result = luhn($luhn);
	if($result == 1)
	{
		echo "This is a correct SIM-card number";
	}else { echo "This is NOT a valid SIM-card number"; }
}
?>