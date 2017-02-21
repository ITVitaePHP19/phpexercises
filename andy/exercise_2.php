<head>
Body Mass Indication calculator
</head>
<body>
<form method="post"> <!--1. Create form and make use of the POST method -->
<fieldset>
	<legend>Calculate BMI</legend>
		Length in CM: <input type="number" name="length" min="1" max="250" required>
		<br>
		Weight in KG: <input type="number" name="weight" min="1" max="350" step="any" required>
		<br>
		<button type="calculate" value="Calculate" name="calculate">Calculate</button>
		<button type="Reset" value="Reset" name="Reset">Reset</button>
	</fieldset>
</form>

<?php //.2 Assign length and Weight values through $_Post and calculate using the retrieved values and then show result through an echo
    if(isset($_POST['length'])) {
		$length = $_POST['length']/100;
		$weight = $_POST['weight'];
    }
      if ($length!= null && $weight!= null)  {
			$calculation=round($weight/($length*$length),2);
			echo "Body Mass Index = ".$calculation;
    }
?>
</body>
