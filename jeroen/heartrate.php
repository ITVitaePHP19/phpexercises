<!doctype html>
<html>
<head>
<title>Heart rate limits calculator</title>
</head>
<body>

<?php
$age= $Err="";
$message ="";
$upperLimit=((220-($_POST['age']))*0.85);
$lowerLimit=((220-($_POST['age']))*0.65);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["age"])){
		$Err = "fill in your age.";
	}
	else {
		$age = ($_POST['age']);
			if (!is_numeric($age)||$age <= 0||$age >= 125){
				$Err = "not a valid input.";
			}
			else {
				if ($age != null){
				$message = "Upper limit for your age is ".$upperLimit.". Lower limit is ".$lowerLimit.".";
				}
			}
	}
}
?>

<h1>Heart rate limits calculator</h1>

<form method="post">
	Age: <input type="number" name="age" min="0" max="125" value="<?php echo $age;?>" required>
	<span class="Err"> <?php echo $Err;?></span>
	<br><br>
	<button type="calculate" value="Calculate" name="calculate">Calculate</button>
	<button type="Reset" value="Reset" name="Reset">Reset</button>
</form>
<br>
<?php
echo $message;
?>
</body>
</html>