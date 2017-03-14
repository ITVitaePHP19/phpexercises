<DOCTYPE! HTML>
<?php	
	session_start();
?>
<html>
<head><title>TicTacToe</title>
<style>
body,html{height:100%;width:100%;padding:0;margin:0;}
</style>

<?php
// todo must include

// top should say which player's turn it is


// make 9 buttons, value 1 through 9

// when you click the value on it changes to either X or O depending on which player is playing
// after getting a value, cant get a new value (cant be pressed again to change value during a game)
// check for winnning combination
// winning rows, if there is either 3 X or 3 O in all of the button combinations 123 456 789 across, 156  357 diagonally, and 147 258 and 369 down 
// corresponding player wins
// game ends upon the above true (announce the winning player)
// or game ends if all the buttons have a value (announce its a draw)
// if not true,
// switch to next player

// nice to  have
// have the player be able to rename from default to a name of their choosing, either both players before the game starts, or before each's first turn.
// or
// pick a name from random silly names

if (!isset ($_SESSION["player"])){
	$_SESSION["player"] = "1";


echo 'Current player is player: '.$_SESSION["player"];
	
if(isset($_POST["buttonPress1"])){
	handleMemory($_POST["buttonPress1"]);
	break;
}


// function for putting in the X or O
function handleButton($buttonvalue){
	if($_SESSION["player"] == "1"){
		$buttonvalue == "X";
	}
		elseif ($_SESSION["player"] == "2"){
			$buttonvalue == "O"; 
		}
}

?>


</head>
<body>
<form method="post" action="tictactoe.php">

<p align='center'>
<table width="600" border="5" height="600">

<tr><td><input name="buttonPress1" value="1" type="submit" min="0" step="any" width="100%" height="100%"/></td>
	<td><input name="buttonPress2" value="2" type="submit" min="0" step="any" width="100%" height="100%"/></td>
	<td><input name="buttonPress3" value="3" type="submit" min="0" step="any" width="100%" height="100%"/></td>
</tr>
<tr><td><input name="buttonPress4" value="4" type="submit" min="0" step="any" width="100%" height="100%"/></td>
	<td><input name="buttonPress5" value="5" type="submit" min="0" step="any" width="100%" height="100%"/></td>
	<td><input name="buttonPress6" value="6" type="submit" min="0" step="any" width="100%" height="100%"/></td>
</tr>
<tr><td><input name="buttonPress7" value="7" type="submit" min="0" step="any" width="100%" height="100%"/></td>
	<td><input name="buttonPress8" value="8" type="submit" min="0" step="any" width="100%" height="100%"/></td>
	<td><input name="buttonPress9" value="9" type="submit" min="0" step="any" width="100%" height="100%"/></td>
</tr>


</table>
</p>





</body>
</html>