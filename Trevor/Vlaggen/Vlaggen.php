<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>



	
	
<?php 
$firstN = array();
$min = 1;
$max = 8;
$number1 = rand($min, $max);
for ($i = 0; $i < $number1; $i++){
    $firstN[1] = '<img src="vlaggen1\vlagFR.jpg" border="2" style="width:400px;height:300px;">';
	$firstN[2] = '<img src="vlaggen1\vlagCH.jpg" border="2" style="width:400px;height:300px;">';
	$firstN[3] = '<img src="vlaggen1\vlagDU.jpg" border="2" style="width:400px;height:300px;">';
	$firstN[4] = '<img src="vlaggen1\vlagCA.jpg" border="2" style="width:400px;height:300px;">';
	$firstN[5] = '<img src="vlaggen1\vlagIT.jpg" border="2" style="width:400px;height:300px;">';
	$firstN[6] = '<img src="vlaggen1\vlagJA.jpg" border="2" style="width:400px;height:300px;">';
	$firstN[7] = '<img src="vlaggen1\vlagKO.jpg" border="2" style="width:400px;height:300px;">';
	$firstN[8] = '<img src="vlaggen1\vlagZW.jpg" border="2" style="width:400px;height:300px;">';																														
}   

echo $firstN[$number1];
?>	
 <h1>Choose the right flag!</h1>
 <form action="<?php require 'berekening.php';?>" method="post">
	<select name="berekening">
	<option  Duitsland </option>
	<option  Korea </option>
	<option  Frankrijk </option>
	<option  China </option>
	<option  Canada </option>
	<option  Japan </option>
	<option  Italie </option>
	<option  Zwitserland </option>
	</select>
	<button type="submit" name="submit" value="submit"> Capture the flag</button>
	
	</form>









</body>
</html>