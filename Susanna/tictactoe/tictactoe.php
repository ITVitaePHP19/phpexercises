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
// when you click the value on it changes to either X or O depending on which player is playing DONE
// after getting a value, cant get a new value (cant be pressed again to change value during a game) DONE
// check for winnning combination  DONE
// winning rows, if there is either 3 X or 3 O in all of the button combinations 123 456 789 across, 159  357 diagonally, and 147 258 and 369 down DONE
// corresponding player wins DONE
// game ends upon the above true (announce the winning player) DONE
// or game ends if all the buttons have a value (announce its a draw) DONE
// if not true, DONE
// switch to next player DONE
// solved the refresh player switching bug DONE 
// (by adding it to the function handleButton, which checks if a field is empty before putting in an 1 or a 2)
// implement whitelist in case someone edits the value of the buttons in html DONE
// fix bug that displays draw whilst simulatenously showing winning player DONE
// fix bug that declares draw when the last move is a player winning DONE
// fix bug that declares winner after next player does a move DONE

// php require external file for all the logic


// var_dump($_POST);  


if (!isset ($_SESSION["player"])){
	$_SESSION["player"] = "1";
}

if (!isset($_SESSION["fields"])) {
   setFields();
}


$allowedValues = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];

// function set fields
function setFields(){
	for($i = 1; $i <= 9; $i++) {
      $_SESSION["fields"][$i] = "0";
   }
}


// handle incoming button press, check for winning combination or draw parameters
if(isset($_POST["buttonPress"])){
	if (in_array($_POST["buttonPress"], $allowedValues, TRUE)){
		handleButton($_POST["buttonPress"]);
		winningCombo();
	}
	else{
		echo 'You have been eaten by a grue';
	}
}

// makes reset button functional
if(isset($_POST["Reset"])) { 
	$_SESSION["player"] = "1";
	setFields();
	
}

// checks if field is empty, if true switches ownership of field to current player, and switches to other player
function handleButton($buttonvalue){
	if($_SESSION["fields"][$buttonvalue] == "0"){
		$_SESSION["fields"][$buttonvalue] = $_SESSION["player"];
		if($_SESSION["player"] == "1"){
			$_SESSION["player"] = "2";
	}
		elseif($_SESSION["player"] == "2"){
			$_SESSION["player"] = "1";
	}
	}
	
	
}
// checks for winning combinations for each player, if neither have won checks for draw state.
function winningCombo(){
	
		if ((($_SESSION["fields"][1] == 1) && ($_SESSION["fields"][2] == 1) && ($_SESSION["fields"][3] == 1)) ||
		   (($_SESSION["fields"][4] == 1) && ($_SESSION["fields"][5] == 1) && ($_SESSION["fields"][6] == 1)) ||
		   (($_SESSION["fields"][7] == 1) && ($_SESSION["fields"][8] == 1) && ($_SESSION["fields"][9] == 1)) ||
		   (($_SESSION["fields"][1] == 1) && ($_SESSION["fields"][5] == 1) && ($_SESSION["fields"][9] == 1)) ||
		   (($_SESSION["fields"][3] == 1) && ($_SESSION["fields"][5] == 1) && ($_SESSION["fields"][7] == 1)) ||
		   (($_SESSION["fields"][1] == 1) && ($_SESSION["fields"][4] == 1) && ($_SESSION["fields"][7] == 1)) ||
		   (($_SESSION["fields"][2] == 1) && ($_SESSION["fields"][5] == 1) && ($_SESSION["fields"][8] == 1)) ||
		   (($_SESSION["fields"][3] == 1) && ($_SESSION["fields"][6] == 1) && ($_SESSION["fields"][9] == 1)))
		{
			echo "Player 1 has won the game!";
		}
 	
		elseif ((($_SESSION["fields"][1] == 2) && ($_SESSION["fields"][2] == 2) && ($_SESSION["fields"][3] == 2)) ||
		   (($_SESSION["fields"][4] == 2) && ($_SESSION["fields"][5] == 2) && ($_SESSION["fields"][6] == 2)) ||
		   (($_SESSION["fields"][7] == 2) && ($_SESSION["fields"][8] == 2) && ($_SESSION["fields"][9] == 2)) ||
		   (($_SESSION["fields"][1] == 2) && ($_SESSION["fields"][5] == 2) && ($_SESSION["fields"][9] == 2)) ||
		   (($_SESSION["fields"][3] == 2) && ($_SESSION["fields"][5] == 2) && ($_SESSION["fields"][7] == 2)) ||
		   (($_SESSION["fields"][1] == 2) && ($_SESSION["fields"][4] == 2) && ($_SESSION["fields"][7] == 2)) ||
		   (($_SESSION["fields"][2] == 2) && ($_SESSION["fields"][5] == 2) && ($_SESSION["fields"][8] == 2)) ||
		   (($_SESSION["fields"][3] == 2) && ($_SESSION["fields"][6] == 2) && ($_SESSION["fields"][9] == 2)))
		{
			echo "Player 2 has won the game!";
		}		
		else {
			if (in_array("0",$_SESSION["fields"],TRUE)){
			;
			}
			else {
			echo "It's a draw!";
			}
		} 
	


}
// sends correct img src, based upon ownership of the field mentioned in the button php script
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


echo 'Current player is player: '.$_SESSION["player"];
// echo 'value of field sessions is: '.$_SESSION["fields"][1].$_SESSION["fields"][2].$_SESSION["fields"][3].$_SESSION["fields"][4].$_SESSION["fields"][5].$_SESSION["fields"][6].$_SESSION["fields"][7].$_SESSION["fields"][8].$_SESSION["fields"][9];
 
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