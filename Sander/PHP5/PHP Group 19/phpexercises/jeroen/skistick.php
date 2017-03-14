<!doctype html>
<html>
<head>
<title>ski-stick height calculation</title>
</head>
<body>
<form method="post">
<fieldset>
<legend>Ski-stick height calculation</legend>
	Your height in cm: <input type="number" name="height" step="any" required>
	<br>
	<input type="radio" name="sticktype" value="CCC" required> Cross-country skiing (classical)
	<br>
	<input type="radio" name="sticktype" value="CCF" required> Cross-country skiing (free-style)
	<br>
		<input type="radio" name="sticktype" value="NW" required> Nordic Walk
	<br>

	<br>
	<button type="submit">Submit</button>
	<button type="submit">Reset</button>
</fieldset>
</form>
<br>

<?php
if(isset($_POST['height'])){$height = $_POST['height'];}else{$height="";}
$CCC = $height*0.85;
$CCF = $height*0.9;
$NW = $height*0.68;
if(isset($_POST['sticktype'])){$stick = $_POST['sticktype'];}else{$stick="";}
if($stick=="CCC"){
	echo "Height of the stick should be about ". round($CCC, 1). " centimeters.";
}
elseif($stick=="CCF"){
	echo "Height of the stick should be about ". round($CCF, 1). " centimeters.";
}
elseif($stick=="NW"){
	echo "Height of the stick should be about ". round($NW, 1). " centimeters.";
}
?>

</body>
</html>
