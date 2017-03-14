<!doctype html>
<head>
<title>Simple currency calculator</title>
</head>
<body>

<form method="post">
<fieldset>
<legend>Currency-calculator</legend>
Dollars: <input type="number" name="Dollar" min="0" step="any" required>
<br><br>
<button type="calculate" value="Calculate" name="calculate">Calculate</button>
<button type="Reset" value="Reset" name="Reset">Reset</button>
</fieldset>
</form>
<br>
<?php
$CurrentExchangeRate = 0.931403;
if(isset($_POST['Dollar'])){$dollar = $_POST['Dollar'];}else{$dollar="";}

if ($dollar!= null){
	$euro=round($dollar*$CurrentExchangeRate,2);
	echo $dollar . " dollar = " . $euro . " euro.";
}
?>


</body>
</html>