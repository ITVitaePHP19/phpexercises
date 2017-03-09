<DOCTYPE! HTML>
<?php	
	session_start();
?>
<html>
<head><title>Calculator</title>
<?php

// TODO
// remove the ability to press operators one after another, maybe by not allowing them to do anything if both result and lastnumber sessions are blank
// or by saying if buttonPressPrev is a operator or = for it to do nothing
// build functionality for %
// add euro's mode with rounding and , as punctuation instead of .
// change the layout of the buttons so it looks a bit better
// make default for numberPress do nothing to circumvent people changing the value of the buttons in html.

// return function to . to have a 0 appear in front of it if its pressed in an empty field. DONE
// add another session for last button pressed. DONE 
// fix fatal error from pressing = twice DONE 


// checks if the session var exists, if not, creates it with empty string
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
if (!isset ($_SESSION["buttonPressPrev"])){
	$_SESSION["buttonPressPrev"] = "";
}


// any button pressed except for Clear enters here through $_POST["buttonPress"]
if(isset($_POST["buttonPress"])) {	
	echo 'last button pressed is '.$_POST["buttonPress"];
	echo ' previous button pressed is '.$_SESSION["buttonPressPrev"];
	
	switch ($_POST["buttonPress"]){
		//function of .
		case ".":
			if($_SESSION["result"] == "") {
				$_SESSION["result"] = "0."; 
			} 
			if (strpos($_SESSION["result"], '.') == false) { 
				$_SESSION["result"] = appendValue($_SESSION["result"], ".");
			}
			break;
		//function of =
		case "=":
			if(($_SESSION["buttonPressPrev"] == '=') == false){
				handleOperator($_SESSION["operator"]);
				$_SESSION["operator"] = "";
				$_SESSION["result"] = $_SESSION["lastnumber"];	
			}
			break;
		//send operators to handleOperator function
		case "+":
		case "-":
		case "*":
		case "/":

			handleOperator($_POST["buttonPress"]);
			break;
		// send memory function buttons to handleMemory function
		case "MC":
		case "MR":
		case "MS":
		case "M+":
		case "M-":
			handleMemory($_POST["buttonPress"]);
			break;
		// send all other buttonPress values to appendValue function
		default:
			$_SESSION["result"] = appendValue($_POST["buttonPress"]);
	}
	// store button press value into session "buttonPressPrev"
	$_SESSION["buttonPressPrev"] = $_POST["buttonPress"];
}

// functionality of Clear
if(isset($_POST["Clear"])) { 
	$_SESSION["operator"] = "";
	$_SESSION["lastnumber"] = "";
	$_SESSION["result"] = ""; 
	$_SESSION["buttonPressPrev"] = "";
}
// memory buttons function
function handleMemory($buttonvalue) {
	switch($buttonvalue) {
		// clear memory
		case "MC":
			$_SESSION["memory"] = ""; 
			break;
		// recall from memory
		case "MR":
			$_SESSION["result"] = $_SESSION["memory"];
			break;
		// save to memory
		case "MS":
			$_SESSION["memory"] = $_SESSION["result"]; 
			break;
		// memory value plus result
		case "M+":
			$_SESSION["memory"] += $_SESSION["result"];
			break;
		// memory value minus result
		case "M-":
			$_SESSION["memory"] -= $_SESSION["result"];
			break;
	}
}
// function for + - * and /
function handleOperator($buttonvalue) {
	if($_SESSION["operator"] == "") {
		$_SESSION["operator"] = $buttonvalue;
		$_SESSION["lastnumber"] = $_SESSION["result"];
		$_SESSION["result"] = "";		
	} 			
	else {
		switch($_SESSION["operator"]) {
			// lastnumber - result
			case "-":
				$_SESSION["result"] = $_SESSION["lastnumber"] - $_SESSION["result"];
				$_SESSION["operator"] = "";
				handleOperator($buttonvalue);
				break;
			// lastnumber + result
			case "+":
				$_SESSION["result"] = $_SESSION["lastnumber"] + $_SESSION["result"];
				$_SESSION["operator"] = "";
				handleOperator($buttonvalue);
				break;
			// lastnumber * result
			case "*":
				$_SESSION["result"] = $_SESSION["lastnumber"] * $_SESSION["result"];
				$_SESSION["operator"] = "";
				handleOperator($buttonvalue);
				break;
			// lastnumber divided by result
			case "/":
				$_SESSION["result"] = $_SESSION["lastnumber"] / $_SESSION["result"];
				$_SESSION["operator"] = "";
				handleOperator($buttonvalue);
				break;
		}
	}
}

// add value to result string
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