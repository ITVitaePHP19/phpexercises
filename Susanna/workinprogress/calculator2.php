<DOCTYPE! HTML>

<html>
<head><title>Calculator</title>
<?php


session_start();
if (!isset ($_SESSION["result"])){
	$_SESSION["result"] = "";
}



if(isset($_POST["buttonPress"])) {
	
	echo 'last button pressed is '.$_POST["buttonPress"];
	if ($_POST["buttonPress"] === '.'){
		if($_SESSION["result"] == "") 
		{
			$_SESSION["result"] = "0"; 
		} 
		if (strpos($_SESSION["result"], '.') == false) 
		{ 
			$_SESSION["result"] = AppendValue($_SESSION["result"], ".");
		} 
	}
	else {
		$_SESSION["result"] = AppendValue($_SESSION["result"], $_POST["buttonPress"]);
	}

}


if(isset($_POST["lastnumber"])) { echo "lastnumber = ".$_POST["lastnumber"]."<br/>"; $lastnumber = $_POST["lastnumber"];}


if(isset($_POST["Clear"])) { $_SESSION["result"] = ""; }


if(isset($_POST["Calculate"])) { 
	

}





function AppendValue($result, $buttonvalue) {
	return $result.$buttonvalue;	
}
?>
</head>
<body>

<form method="post" action="calculator2.php">
<input type="input" name="memory" value="<?php echo (isset($memory))?$memory:'';?>"/>
<input type="input" name="lastnumber" value="<?php echo (isset($lastnumber))?$lastnumber:'';?>"/>
<table>
<tr><td colspan=5><input name="answer" value="<?php echo (isset($_SESSION["result"]))?$_SESSION["result"]:'';?>" type="input" readonly/></td></tr>

<tr>
	<td><input name="Clear" value="C" type="submit" min="0" step="any"/></td>
	
</tr>
<tr><td><input name="buttonPress" value="7" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="8" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="9" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="/" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="%" type="submit" min="0" step="any"/></td>
</tr>
<tr><td><input name="buttonPress" value="4" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="5" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="6" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="*" type="submit" min="0" step="any"/></td>
	
</tr>
<tr><td><input name="buttonPress" value="1" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="2" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="3" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="-" type="submit" min="0" step="any"/></td>
	<td rowspan=2><input name="Calculate" value="=" type="submit" min="0" step="any"/></td>
</tr>
<tr><td colspan=2><input name="buttonPress" value="0" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="." type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="+" type="submit" min="0" step="any"/></td>
</tr>
</table>

</form>

</body>
</html>