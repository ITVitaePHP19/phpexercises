<!DOCTYPE html>
<html>
<head>
<title>Heart rate limits calculator utility</title>
</head>
<body>
<form action="heartrate.php" method="POST">
<h1>Heart rate limits calculator utility</h1>

<?php 
function heartRateCalculator() {
	$age = $_POST['age'];
	$heartRateUpper = (220 - $age) * 0.85;
	$heartRateLower = (220 - $age) * 0.65;
	echo "Your <b>lower heart rate limit</b> = $heartRateLower \n and your <b>upper heart rate limit</b> = $heartRateUpper";

}

if (isset($_POST['submit']) && $_POST['submit'] == "calculate") {
	heartRateCalculator();
}

else {



// if name 'submit' is set, run heartRateCalculator();
// else show form
// when submit has been clicked 
// isset instead of ($_SERVER['REQUEST METHOD'] == 'POST')
// php can start and end anywhere in code


?>

<p>age</p><input type="number" name="age" min="1"><br>
<!-- 
min to set a minimum number
-->
<input type="submit" name="submit" value="calculate">
<input type="reset" name="reset" value="reset">
</form>
<?php
}
?>

</body>
</html>