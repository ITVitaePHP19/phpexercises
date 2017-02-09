<!DOCTYPE html>
<html>
<head>
<title>Currency Calculator</title>
</head>
<body>
<form action="currency.php" method="POST">
Currency Calculator<br>

<?php 

if (isset($_POST['submit']) && $_POST['submit'] == "convert") {
	currencyCalc();
}

// isset instead of ($_SERVER['REQUEST METHOD'] == 'POST')


function currencyCalc() {
	$input  = $_POST['input'];
	$dollar = 1.073247;
	$result = $input * $dollar;
	echo "<p>&euro;$input is $result in USD</p>";
}
//phpinfo();
?>

 	&euro;	<input type="number" name="input"><br>
		    <input type="submit" name="submit" value="convert">
</form>
</body>
</html>