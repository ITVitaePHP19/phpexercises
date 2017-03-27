<?php
session_start();
$a1="a1";
$a2="a2";
$a3="a3";
$b1="b1";
$b2="b2";
$b3="b3";
$c1="c1";
$c2="c2";
$c3="c3";

//define message if player has won or the game end in a draw.
if(!isset($message))$message="";

//define variable for disabling the submit button
if(!isset($disable_sub))$disable_sub="";

//create for each field a session, whitch is empty at the start of the game
if(!isset($_SESSION['a1'])){$_SESSION['a1'] = "";}
if(!isset($_SESSION['a2'])){$_SESSION['a2'] = "";}
if(!isset($_SESSION['a3'])){$_SESSION['a3'] = "";}
if(!isset($_SESSION['b1'])){$_SESSION['b1'] = "";}
if(!isset($_SESSION['b2'])){$_SESSION['b2'] = "";}
if(!isset($_SESSION['b3'])){$_SESSION['b3'] = "";}
if(!isset($_SESSION['c1'])){$_SESSION['c1'] = "";}
if(!isset($_SESSION['c2'])){$_SESSION['c2'] = "";}
if(!isset($_SESSION['c3'])){$_SESSION['c3'] = "";}
if(!isset($_SESSION['turn_count'])){$_SESSION['turn_count'] = "";}

//count number of times that submit button is pressed
if (isset($_POST['submit'])){
	$_SESSION['turn_count'] ++;
}

//if counter is uneven, it's O's turn, else its X's turn.
if($_SESSION['turn_count']%2==0){
	$player = 'O';
	$opponent = 'X';
}
else{
	$player = 'X';
	$opponent = 'O';
}

$message = "Beurt: speler <b>". $opponent ."</b>";

//fill the field
function fill_field($field){
	global $player;
	if(isset($_POST['field_select'])){$field_select=($_POST['field_select']);}
	if (isset($_POST['submit'])){
		if(is_array($field_select)){				//needed for foreach, to confirm $field_select is an array
			foreach($field_select as $selected){	//makes for each option in drop-downmenu a variable '$selected'
				if($selected == $field){			//if that variable is the same as $field
					$field = $player;
					return $field;					//$field will be filled with either X or O
				}
			}
		}
	}
}

//if field-session is empty, field will be filled with fill_field output
if($_SESSION['a1'] == "") $_SESSION['a1'] = fill_field($a1);
if($_SESSION['a2'] == "") $_SESSION['a2'] = fill_field($a2);
if($_SESSION['a3'] == "") $_SESSION['a3'] = fill_field($a3);
if($_SESSION['b1'] == "") $_SESSION['b1'] = fill_field($b1);
if($_SESSION['b2'] == "") $_SESSION['b2'] = fill_field($b2);
if($_SESSION['b3'] == "") $_SESSION['b3'] = fill_field($b3);
if($_SESSION['c1'] == "") $_SESSION['c1'] = fill_field($c1);
if($_SESSION['c2'] == "") $_SESSION['c2'] = fill_field($c2);
if($_SESSION['c3'] == "") $_SESSION['c3'] = fill_field($c3);

//make session-variables short
$sesa1 = $_SESSION['a1'];
$sesa2 = $_SESSION['a2'];
$sesa3 = $_SESSION['a3'];
$sesb1 = $_SESSION['b1'];
$sesb2 = $_SESSION['b2'];
$sesb3 = $_SESSION['b3'];
$sesc1 = $_SESSION['c1'];
$sesc2 = $_SESSION['c2'];
$sesc3 = $_SESSION['c3'];

//if a player has a winning combination, the players wins. 
//the message shows the player who won, by showing the last player whos played
//the submit button will be set to "disabled", so the game can't continue. 
if (($sesa1==$sesa2)&&($sesa2==$sesa3) && $sesa1!=null||
	($sesb1==$sesb2)&&($sesb2==$sesb3) && $sesb1!=null||
	($sesc1==$sesc2)&&($sesc2==$sesc3) && $sesc1!=null||
	($sesa1==$sesb1)&&($sesb1==$sesc1) && $sesa1!=null||
	($sesa2==$sesb2)&&($sesb2==$sesc2) && $sesa2!=null||
	($sesa3==$sesb3)&&($sesb3==$sesc3) && $sesa3!=null||
	($sesa1==$sesb2)&&($sesb2==$sesc3) && $sesa1!=null||
	($sesa3==$sesb2)&&($sesb2==$sesc1) && $sesa3!=null){
	$message = "Speler <b>" .$player. "</b> heeft gewonnen.";
	$disable_sub = "disabled";
}

//if session-counter is 9 and there is no winner, the game ends in a draw and submit-button will be disabled.
if (($_SESSION['turn_count'] >= 9) && ($message != "Speler <b>" .$player. "</b> heeft gewonnen.")){
	$disable_sub = "disabled";
	$message = "Geen winnaar";
}

//by pressing reset, clear all sessions and enable submit button.
if(isset($_POST['reset'])){
	$_SESSION['a1'] = $_SESSION['a2'] = $_SESSION['a3'] = $_SESSION['b1'] =
	$_SESSION['b2'] = $_SESSION['b3'] = $_SESSION['c1'] = $_SESSION['c2'] =
	$_SESSION['c3'] = $_SESSION['turn_count'] = $disable_sub = "";
	$opponent = "X";
	$message = "Beurt: speler <b>". $opponent ."</b>";
	
}
?>
