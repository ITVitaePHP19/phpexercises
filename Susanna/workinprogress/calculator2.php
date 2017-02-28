<DOCTYPE! HTML>
<?php	
	session_start();
?>
<html>
<head><title>Calculator</title>
<?php

// TODO
// build functionality for %
// fix fatal error from pressing = twice
// add euro's mode with rounding and , as punctuation instead of .
// change the layout of the buttons so it looks a bit better
// return function to . to have a 0 appear in front of it if its pressed in an empty field. done
// add another session for last button pressed.
// 

if (!isset ($_SESSION["result"])){
	$_SESSION["result"] = "";
}
if (!isset ($_SESSION["memory"])){
	$_SESSION["memory"] = "";
}
if (!isset ($_SESSION["operator"])){
	$_SESSION["operator"] = "";
}
if (!isset ($_SESSION["lastnumber"])){
	$_SESSION["lastnumber"] = "";
}




if(isset($_POST["buttonPress"])) {
	
	echo 'last button pressed is '.$_POST["buttonPress"];
	switch ($_POST["buttonPress"]){
		case ".":
			if($_SESSION["result"] == "") {
				$_SESSION["result"] = "0."; 
			} 
			if (strpos($_SESSION["result"], '.') == false) 
			{ 
				$_SESSION["result"] = appendValue($_SESSION["result"], ".");
			}
			break;
		case "+":
		case "-":
		case "*":
		case "/":
		case "=":
			handleOperator($_POST["buttonPress"]);
			break;
		case "MC":
		case "MR":
		case "MS":
		case "M+":
		case "M-":
			handleMemory($_POST["buttonPress"]);
			break;
		default:
			$_SESSION["result"] = appendValue($_POST["buttonPress"]);
	}

}


if(isset($_POST["Clear"])) { 
	$_SESSION["operator"] = "";
	$_SESSION["lastnumber"] = "";
	$_SESSION["result"] = ""; 
}

function handleMemory($buttonvalue) {
	switch($buttonvalue) {
		case "MC":
			$_SESSION["memory"] = ""; 
			break;
		case "MR":
			$_SESSION["result"] = $_SESSION["memory"];
			break;
		case "MS":
			$_SESSION["memory"] = $_SESSION["result"]; 
			break;
		case "M+":
			$_SESSION["memory"] += $_SESSION["result"];
			break;
		case "M-":
			$_SESSION["memory"] -= $_SESSION["result"];
			break;
	}
}

function handleOperator($buttonvalue) {
	if($_SESSION["operator"] == "") {
		$_SESSION["operator"] = $buttonvalue;
		$_SESSION["lastnumber"] = $_SESSION["result"];
		$_SESSION["result"] = "";		
	} elseif($buttonvalue == "=") {
				handleOperator($_SESSION["operator"]);
				$_SESSION["operator"] = "";
				$_SESSION["result"] = $_SESSION["lastnumber"];				
	} else {
		switch($_SESSION["operator"]) {
			case "-":
				$_SESSION["result"] = $_SESSION["lastnumber"] - $_SESSION["result"];
				$_SESSION["operator"] = "";
				handleOperator($buttonvalue);
				break;
			case "+":
				$_SESSION["result"] = $_SESSION["lastnumber"] + $_SESSION["result"];
				$_SESSION["operator"] = "";
				handleOperator($buttonvalue);
				break;
			case "*":
				$_SESSION["result"] = $_SESSION["lastnumber"] * $_SESSION["result"];
				$_SESSION["operator"] = "";
				handleOperator($buttonvalue);
				break;
			case "/":
				$_SESSION["result"] = $_SESSION["lastnumber"] / $_SESSION["result"];
				$_SESSION["operator"] = "";
				handleOperator($buttonvalue);
				break;
		}
	}
}


function appendValue($buttonvalue) {
	return $_SESSION["result"].$buttonvalue;	
}
?>
</head>
<body>

<form method="post" action="calculator2.php">
<input type="input" name="memory" value="<?php echo (isset($_SESSION["memory"]))?$_SESSION["memory"]:'';?>" type="input" readonly/>
<input type="input" name="lastnumber" value="<?php echo (isset($_SESSION["lastnumber"]))?$_SESSION["lastnumber"]:'';?>" type="input" readonly/>
<table>
<tr><td colspan=5><input name="answer" value="<?php echo (isset($_SESSION["result"]))?$_SESSION["result"]:'';?>" type="input" readonly/></td></tr>

<tr><td><input name="buttonPress" value="MC" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="MR" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="MS" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="M+" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="M-" type="submit" min="0" step="any"/></td>
</tr>
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
	<td rowspan=2><input name="buttonPress" value="=" type="submit" min="0" step="any"/></td>
</tr>
<tr><td colspan=2><input name="buttonPress" value="0" type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="." type="submit" min="0" step="any"/></td>
	<td><input name="buttonPress" value="+" type="submit" min="0" step="any"/></td>
</tr>
</table>

</form>

</body>
</html>