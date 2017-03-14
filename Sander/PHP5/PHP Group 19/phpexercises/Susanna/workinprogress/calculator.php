<DOCTYPE! HTML>

<html>
<head><title>Calculator</title>
<?php

if(isset($_POST["memory"])) { echo "memory = ".$_POST["memory"]."<br/>"; $memory = $_POST["memory"];}
if(isset($_POST["lastnumber"])) { echo "lastnumber = ".$_POST["lastnumber"]."<br/>"; $lastnumber = $_POST["lastnumber"];}

if(isset($_POST["answer"])) { echo "answer = ".$_POST["answer"]."<br/>"; $result = $_POST["answer"]; }
if(isset($_POST["MC"])) { echo "MC button pressed"; }
if(isset($_POST["MR"])) { echo "MR button pressed"; }
if(isset($_POST["MS"])) { echo "MS button pressed"; }
if(isset($_POST["MPlus"])) { echo "M+ button pressed"; }
if(isset($_POST["MMinus"])) { echo "M- button pressed"; }
if(isset($_POST["BS"])) { echo "<- button pressed"; }
if(isset($_POST["CE"])) { echo "CE button pressed"; }
if(isset($_POST["C"])) { $result = ""; }
if(isset($_POST["PlusMinus"])) { echo "+- button pressed"; }
if(isset($_POST["Squareroot"])) { echo "SQRT button pressed"; }
if(isset($_POST["Divide"])) { echo "/ button pressed"; }
if(isset($_POST["Percentage"])) { echo "% button pressed"; }
if(isset($_POST["Multiply"])) { echo "* button pressed"; }
if(isset($_POST["OneDividedByX"])) { echo "1/x button pressed"; }
if(isset($_POST["Squareroot"])) { echo "SQRT button pressed"; }
if(isset($_POST["Minus"])) { echo "- button pressed"; }
if(isset($_POST["Plus"])) { echo "+ button pressed"; }
if(isset($_POST["Seperator"])) 

{
		if($result == "") 
		{
				$result = "0"; 
		} 
		if (strpos($result, '.') == false) 
		{ 
			$result = AppendValue($result, ".");
		} 
}
for($nr=0;$nr<=9;$nr++) {
	if(isset($_POST["Nr".$nr])) { echo $nr." button pressed"; }
	if(isset($_POST["Nr".$nr])) { $result = AppendValue($result, $nr); }
}

function AppendValue($result, $buttonvalue) {
	return $result.$buttonvalue;	
}
?>
</head>
<body>

<form method="post" action="calculator.php">
<input type="input" name="memory" value="<?php echo (isset($memory))?$memory:'';?>"/>
<input type="input" name="lastnumber" value="<?php echo (isset($lastnumber))?$lastnumber:'';?>"/>
<table>
<tr><td colspan=5><input name="answer" value="<?php echo (isset($result))?$result:'';?>" type="input" readonly/></td></tr>
<tr><td><input name="MC" value="MC" type="submit" min="0" step="any"/></td>
	<td><input name="MR" value="MR" type="submit" min="0" step="any"/></td>
	<td><input name="MS" value="MS" type="submit" min="0" step="any"/></td>
	<td><input name="MPlus" value="M+" type="submit" min="0" step="any"/></td>
	<td><input name="MMinus" value="M-" type="submit" min="0" step="any"/></td>
</tr>
<tr><td><input name="BS" value="<-" type="submit" min="0" step="any"/></td>
	<td><input name="CE" value="CE" type="submit" min="0" step="any"/></td>
	<td><input name="C" value="C" type="submit" min="0" step="any"/></td>
	<td><input name="PlusMinus" value="+-" type="submit" min="0" step="any"/></td>
	<td><input name="Squareroot" value="SQRT" type="submit" min="0" step="any"/></td>
</tr>
<tr><td><input name="Nr7" value="7" type="submit" min="0" step="any"/></td>
	<td><input name="Nr8" value="8" type="submit" min="0" step="any"/></td>
	<td><input name="Nr9" value="9" type="submit" min="0" step="any"/></td>
	<td><input name="Divide" value="/" type="submit" min="0" step="any"/></td>
	<td><input name="Percentage" value="%" type="submit" min="0" step="any"/></td>
</tr>
<tr><td><input name="Nr4" value="4" type="submit" min="0" step="any"/></td>
	<td><input name="Nr5" value="5" type="submit" min="0" step="any"/></td>
	<td><input name="Nr6" value="6" type="submit" min="0" step="any"/></td>
	<td><input name="Multiply" value="*" type="submit" min="0" step="any"/></td>
	<td><input name="OneDividedByX" value="1/x" type="submit" min="0" step="any"/></td>
</tr>
<tr><td><input name="Nr1" value="1" type="submit" min="0" step="any"/></td>
	<td><input name="Nr2" value="2" type="submit" min="0" step="any"/></td>
	<td><input name="Nr3" value="3" type="submit" min="0" step="any"/></td>
	<td><input name="Minus" value="-" type="submit" min="0" step="any"/></td>
	<td rowspan=2><input name="Calculate" value="=" type="submit" min="0" step="any"/></td>
</tr>
<tr><td colspan=2><input name="Nr0" value="0" type="submit" min="0" step="any"/></td>
	<td><input name="Seperator" value="." type="submit" min="0" step="any"/></td>
	<td><input name="Plus" value="+" type="submit" min="0" step="any"/></td>
</tr>
</table>

</form>

</body>
</html>