<DOCTYPE! HTML>
<?php	
	session_start();
?>
<html>
<head><title>TicTacToe</title>
<style>
body,html{
	height:100%;width:100%;padding:0;margin:0;
}
input, button, select, option, textarea {
    font-size: 100%;
}
button {
  background: none;
  border: 0;
}

button:focus {
  outline: 0;
}
</style>

<?php
// TODO must include

// top should say which player's turn it is DONE


// make 9 buttons, value 1 through 9 DONE

// when you click the value on it changes to either X or O depending on which player is playing
// after getting a value, cant get a new value (cant be pressed again to change value during a game)
// check for winnning combination
// winning rows, if there is either 3 X or 3 O in all of the button combinations 123 456 789 across, 156  357 diagonally, and 147 258 and 369 down 
// corresponding player wins
// game ends upon the above true (announce the winning player)
// or game ends if all the buttons have a value (announce its a draw)
// if not true,
// switch to next player
// php require external file for all the logic

// nice to  have
// have the player be able to rename from default to a name of their choosing, either both players before the game starts, or before each's first turn.
// or
// pick a name from random silly names
var_dump($_POST);


if (!isset ($_SESSION["player"])){
	$_SESSION["player"] = "1";
}

if (!isset($_SESSION["fields"])) {
   setFields();
}


echo 'Current player is player: '.$_SESSION["player"];
echo 'value of field sessions is: '.$_SESSION["fields"][1].$_SESSION["fields"][2].$_SESSION["fields"][3].$_SESSION["fields"][4].$_SESSION["fields"][5].$_SESSION["fields"][6].$_SESSION["fields"][7].$_SESSION["fields"][8].$_SESSION["fields"][9];
 

// function set fields
function setFields(){
	for($i = 1; $i <= 9; $i++) {
      $_SESSION["fields"][$i] = "0";
   }
}



// FIX not switching players
if(isset($_POST["buttonPress"])){
	handleButton($_POST["buttonPress"]);
	if($_SESSION["player"] == "1"){
			$_SESSION["player"] == "2";
	}
	elseif($_SESSION["player"] == "2"){
			$_SESSION["player"] == "1";
	}

}

if(isset($_POST["Reset"])) { 
	$_SESSION["player"] = "1";
	setFields();
	
}

// function for putting in the X or O
// FIX not correctly changing session of field to player numer
function handleButton($buttonvalue){
	echo "debug: ".$buttonvalue;
	if($_SESSION["fields"][$buttonvalue] == "0"){
		$_SESSION["fields"][$buttonvalue] == $_SESSION["player"];
//		$_SESSION["player"] == $_SESSION["fields"][$buttonvalue];
	}
	
	
}
// FIX not switching images
function imageDisplay($imageNum){
	if($imageNum == "0"){
		echo "blankspot.png";
	}
	elseif($imageNum == "1"){
		echo "xspot.png"; 
	}
	elseif($imageNum == "2"){
		echo "ospot.png";
	}
}
// 
?>


</head>
<body>
<form method="post" action="tictactoe.php">

<p align='center'>
<table width="600" border="5" height="600">

<tr><td><button name="buttonPress" value="1" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][1]);?> alt="" border='0' height='200' width='200'> </button></td>
	<td><button name="buttonPress" value="2" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][2]);?> alt="" border='0' height='200' width='200'> </button></td>
	<td><button name="buttonPress" value="3" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][3]);?> alt="" border='0' height='200' width='200'> </button></td>
</tr>
<tr><td><button name="buttonPress" value="4" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][4]);?> alt="" border='0' height='200' width='200'> </button></td>
	<td><button name="buttonPress" value="5" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][5]);?> alt="" border='0' height='200' width='200'> </button></td>
	<td><button name="buttonPress" value="6" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][6]);?> alt="" border='0' height='200' width='200'> </button></td>
</tr>
<tr><td><button name="buttonPress" value="7" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][7]);?> alt="" border='0' height='200' width='200'> </button></td>
	<td><button name="buttonPress" value="8" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][8]);?> alt="" border='0' height='200' width='200'> </button></td>
	<td><button name="buttonPress" value="9" type="submit" min="0" step="any"> <img src=<?php imageDisplay($_SESSION["fields"][9]);?> alt="" border='0' height='200' width='200'> </button></td>
</tr>


</table>


<input name="Reset" value="Reset" type="submit" min="0" step="any"/>


</form>
</p>
</body>
</html>