<?php
session_start();

if(!isset($_SESSION['aces'])) $_SESSION['aces']="";
if(!isset($_SESSION['twos'])) $_SESSION['twos']="";
if(!isset($_SESSION['threes']))$_SESSION['threes']="";
if(!isset($_SESSION['fours'])) $_SESSION['fours']="";
if(!isset($_SESSION['fives']))$_SESSION['fives']="";
if(!isset($_SESSION['sixes']))$_SESSION['sixes']="";
if(!isset($_SESSION['toak'])) $_SESSION['toak']="";
if(!isset($_SESSION['carre']))$_SESSION['carre']="";
if(!isset($_SESSION['fh'])) $_SESSION['fh']="";
if(!isset($_SESSION['ss'])) $_SESSION['ss']="";
if(!isset($_SESSION['ls'])) $_SESSION['ls']="";
if(!isset($_SESSION['chance']))$_SESSION['chance']="";
if(!isset($_SESSION['yahtzee'])) $_SESSION['yahtzee']="";
if(!isset($_SESSION['yb'])) $_SESSION['yb']="";
$aces_disable= $twos_disable= $threes_disable = $fours_disable = $fives_disable = $sixes_disable =
$fh_disable = $toak_disable = $carre_disable = $ss_disable = $ls_disable = $yahtzee_disable = $chance_disable = "";
$yb_disable = "disabled";		//standard disable yahtzee-bonus
$disable_roll = "";
$disable_check = "";
$disable_submit = "";
$message="";
$end_message = "";
$fill_in_message = "";

//set initial session count
if(!isset($_SESSION['roll_count'])) $_SESSION['roll_count'] = 0;

//evaluate if checkboxes are checked
if(isset($_POST['check1'])){$checkbox1 = true; $checked1 = "checked='checked'";} else{$checkbox1=false; $checked1="";}
if(isset($_POST['check2'])){$checkbox2 = true; $checked2 = "checked='checked'";} else{$checkbox2=false; $checked2="";}
if(isset($_POST['check3'])){$checkbox3 = true; $checked3 = "checked='checked'";} else{$checkbox3=false; $checked3="";}
if(isset($_POST['check4'])){$checkbox4 = true; $checked4 = "checked='checked'";} else{$checkbox4=false; $checked4="";}
if(isset($_POST['check5'])){$checkbox5 = true; $checked5 = "checked='checked'";} else{$checkbox5=false; $checked5="";}

//gets the current dice-value from hidden field in html-code, in case the player wants to keep the current value of the dice
if(isset($_POST['dice1'])) {$saved_value1 = $_POST['dice1'];} else{$saved_value1="";}
if(isset($_POST['dice2'])) {$saved_value2 = $_POST['dice2'];} else{$saved_value2="";}
if(isset($_POST['dice3'])) {$saved_value3 = $_POST['dice3'];} else{$saved_value3="";}
if(isset($_POST['dice4'])) {$saved_value4 = $_POST['dice4'];} else{$saved_value4="";}
if(isset($_POST['dice5'])) {$saved_value5 = $_POST['dice5'];} else{$saved_value5="";}

//give dice a value
$dice1= rollDice($saved_value1, $checkbox1);
$dice2= rollDice($saved_value2, $checkbox2);
$dice3= rollDice($saved_value3, $checkbox3);
$dice4= rollDice($saved_value4, $checkbox4);
$dice5= rollDice($saved_value5, $checkbox5);

function rollDice($saved_value, $check){
	//if the roll button has not been pressed yet, dice-value is empty.
	if(!isset($_POST['roll'])){
		$dice = "";
		return $dice;
	}
	//if checkbox has been checked, keep it's current value, which is picked from hidden input field
	//checking the box is only possible if dice is not empty
	elseif($check == true){
		$dice = $saved_value;
		return $dice;
	}
	//in other cases, give the dice a random value between 1 and 6.
	else{
		$dice =(mt_rand(1,6));
		return $dice;
	}
}

$freq = "";
$totaldice = "";
$array = array($dice1, $dice2, $dice3 ,$dice4, $dice5);

//in this function some variables needed in one or more calculations
function getDiceInfo() {
	global $dice1, $dice2, $dice3, $dice4, $dice5, $freq, $totaldice;
	$dice1=$_POST['dice1'];
	$dice2=$_POST['dice2'];
	$dice3=$_POST['dice3'];
	$dice4=$_POST['dice4'];
	$dice5=$_POST['dice5'];
	$array = array($dice1, $dice2, $dice3 ,$dice4, $dice5);
	$totaldice = $dice1+$dice2+$dice3+$dice4+$dice5;

	//count number of times a value appears in the array
	$freq = array_count_values($array);
	return $array;
}

//Count the number of rolls. After 3 rolls, a choice has to be made.
if ($_SESSION['roll_count'] == 0) $message = "nog 3 worpen";
if (isset($_POST['roll'])){
	if(!isset($_POST['choice'])){
		$_SESSION['roll_count'] ++;
		if ($_SESSION['roll_count'] == 1) $message="nog 2 worpen";
		elseif ($_SESSION['roll_count'] == 2) $message="nog 1 worp";
		elseif ($_SESSION['roll_count'] >= 3){
			$message = "Maak een keuze";
			$disable_roll = "disabled";
		}
	}
	elseif(isset($_POST['choice'])){
		$disable_submit = "disabled";
		$_SESSION['roll_count'] = 0;
		$checked1 = $checked2 = $checked3 = $checked4 = $checked5 = "";
		$dice1 = $dice2 = $dice3 = $dice4 = $dice5 = "";
		$disable_check = "disabled";
		$message = "nog 3 worpen";
		$aces_disable= $twos_disable= $threes_disable = $fours_disable = $fives_disable = $sixes_disable =
		$fh_disable = $toak_disable = $carre_disable = $ss_disable = $ls_disable = $yahtzee_disable = $yb_disable = $chance_disable = "disabled";
	}
}

//aces
if(isset($_POST['choice']) && ($_POST['choice']) == "aces"){
	//session aces is the output in the score-table
	$_SESSION['aces'] = 0;
	$array = getDiceInfo();
	//for each 1 that is rolled, the sessions of aces counts +1 
	foreach($array as $key => $value){
		if($value == 1){
			$_SESSION['aces']++;
		}
	}
}
//if the session of aces is a number (in other words: if it contains a value), disable its radio-button 
if (is_numeric($_SESSION['aces'])) $aces_disable = "disabled";


//twos
if(isset($_POST['choice']) && ($_POST['choice']) == "twos"){
	$_SESSION['twos'] = 0;
	$array = getDiceInfo();
	foreach($array as $key => $value){
		if($value == 2){
			$_SESSION['twos'] += 2;
		}
	}
}
if (is_numeric($_SESSION['twos'])) $twos_disable = "disabled";

//threes
if(isset($_POST['choice']) && ($_POST['choice']) == "threes"){
	$array = getDiceInfo();	
	$_SESSION['threes'] = 0;
	foreach($array as $key => $value){
		if($value == 3){
			$_SESSION['threes'] += 3;
		}
	}
}
if (is_numeric($_SESSION['threes'])) $threes_disable = "disabled";

//fours
if(isset($_POST['choice']) && ($_POST['choice']) == "fours"){
	$array = getDiceInfo();
	$_SESSION['fours'] = 0;
	foreach($array as $key => $value){
		if($value == 4){
			$_SESSION['fours'] += 4;
		}
	}
}
if (is_numeric($_SESSION['fours'])) $fours_disable = "disabled";

//fives
if(isset($_POST['choice']) && ($_POST['choice']) == "fives"){
	$array = getDiceInfo();
	$_SESSION['fives'] = 0;
	foreach($array as $key => $value){
		if($value == 5){
			$_SESSION['fives'] += 5;
		}
	}
}
if (is_numeric($_SESSION['fives'])) $fives_disable = "disabled";

//sixes
if(isset($_POST['choice']) && ($_POST['choice']) == "sixes"){
	$array = getDiceInfo();
	$_SESSION['sixes'] = 0;
	foreach($array as $key => $value){
		if($value == 6){
			$_SESSION['sixes'] += 6;
		}
	}
}
if (is_numeric($_SESSION['sixes'])) $sixes_disable = "disabled";

//3 of a kind
if (isset($_POST['choice']) && ($_POST['choice'] == "3_kind")){
	$array = getDiceInfo();
	// check if a value appears 3 or more times in array
	if(in_array(3, $freq) || in_array(4, $freq) || in_array(5, $freq)){
		$_SESSION['toak'] = $totaldice;
	}
	else{
		$_SESSION['toak'] = 0;
	}
}
if (is_numeric($_SESSION['toak'])) $toak_disable = "disabled";

//carre
if (isset($_POST['choice']) && ($_POST['choice'] == "carre")){
	$array = getDiceInfo();
	$freq = array_count_values($array);
	//check if a value appears 4 or more times in array
	if(in_array(4, $freq) || in_array(5, $freq)){
		$_SESSION['carre'] = $totaldice;
	}
	else{
		$_SESSION['carre'] = 0;
	}
}
if (is_numeric($_SESSION['carre'])) $carre_disable = "disabled";

//full house
if (isset($_POST['choice']) && ($_POST['choice'] == "fh")){
	$array = getDiceInfo();
	//if a value appears 2 times in an array and another value 3 times, give session of fullhouse 25
	if(in_array(2, $freq) && in_array(3, $freq)){
		$_SESSION['fh'] = 25;
	}
	else{
		$_SESSION['fh'] = 0;
	}
}
if (is_numeric($_SESSION['fh'])) $fh_disable = "disabled";

//small straight
if (isset($_POST['choice']) && ($_POST['choice'] == "ss")){
	$array = getDiceInfo();
	//check if an array contains (1,2,3,4) or (2,3,4,5) or (3,4,5,6)
	if	((in_array(1,$array) && in_array(2,$array) && in_array(3,$array) && in_array(4,$array)) ||
		((in_array(2,$array) && in_array(3,$array) && in_array(4,$array) && in_array(5,$array)) ||
		((in_array(3,$array) && in_array(4,$array) && in_array(5,$array) && in_array(6,$array))))){
			$_SESSION['ss'] = 30;
	}
	else{
			$_SESSION['ss'] = 0;
	}
}
if (is_numeric($_SESSION['ss'])) $ss_disable = "disabled";

//large straight
if (isset($_POST['choice']) && ($_POST['choice'] == "ls")){
	$array = getDiceInfo();
	if((in_array(1,$array) && in_array(2,$array) && in_array(3,$array) && in_array(4,$array) && in_array(5,$array)) ||
	((in_array(6,$array) && in_array(2,$array) && in_array(3,$array) && in_array(4,$array) && in_array(5,$array)))){
		$_SESSION['ls'] = 40;
	}
	else{
		$_SESSION['ls'] = 0;
	}
}
if (is_numeric($_SESSION['ls'])) $ls_disable = "disabled";

//yahtzee
if(isset($_POST['choice']) && $_POST['choice'] == "yahtzee"){
	$array = getDiceInfo();
	//check if all dices have the same value
	if(($dice1==$dice2)&&($dice2==$dice3)&&($dice3==$dice4)&&($dice4==$dice5)){
	$_SESSION['yahtzee'] = 50;
	}
	else{
		$_SESSION['yahtzee'] = 0;
	}
}
if (is_numeric($_SESSION['yahtzee'])) $yahtzee_disable = "disabled";

//enable yahtzee bonus button if conditions are right and yahtzee has 50 pt.
if(($dice1==$dice2)&&($dice2==$dice3)&&($dice3==$dice4)&&($dice4==$dice5)&&($_SESSION['yahtzee'] == 50)){
	$yb_disable="";
}

//yahtzee bonus
if($_SESSION['yahtzee'] == 50 && isset($_POST['choice']) && $_POST['choice'] == 'YB'){
	$array = getDiceInfo();
	if(($dice1==$dice2)&&($dice2==$dice3)&&($dice3==$dice4)&&($dice4==$dice5)){
		$_SESSION['yb'] += 100;
	}
	else{
		$_SESSION['yb'] = 0;
	}
}

//chance
if(isset($_POST['choice']) && ($_POST['choice'] == "chance")){
	$array = getDiceInfo();
	$_SESSION['chance'] = $totaldice;
}
if (is_numeric($_SESSION['chance'])) $chance_disable = "disabled";

//total upper section. 35 bonus if total is higher then 63
$_SESSION['total_us'] = $_SESSION['aces'] + $_SESSION['twos'] + $_SESSION['threes'] + $_SESSION['fours'] + $_SESSION['fives'] + $_SESSION['sixes'];
if($_SESSION['total_us'] > 63) $_SESSION['total_us'] += 35;

//total lower section
$_SESSION['total_ls'] = $_SESSION['toak'] + $_SESSION['carre'] + $_SESSION['fh'] + $_SESSION['ss'] +
$_SESSION['ls'] + $_SESSION['chance'] + $_SESSION['yahtzee'] + $_SESSION['yb'];

//total
$_SESSION['total'] = $_SESSION['total_ls'] + $_SESSION['total_us'];

//submit button
$err_message = "";
if(isset($_POST['submit'])){
	$dice1 = $_POST['dice1'];
	$dice2 = $_POST['dice2'];
	$dice3 = $_POST['dice3'];
	$dice4 = $_POST['dice4'];
	$dice5 = $_POST['dice5'];
	if(!isset($_POST['choice'])){
		$err_message = "Kies een veld.";
		$disable_roll = "disabled";
	}
	elseif(isset($_POST['choice'])){
		$disable_submit = "disabled";
		$_SESSION['roll_count'] = 0;
		$checked1 = $checked2 = $checked3 = $checked4 = $checked5 = "";
		$dice1 = $dice2 = $dice3 = $dice4 = $dice5 = "";
		$disable_check = "disabled";
		$message = "nog 3 worpen";
		$aces_disable= $twos_disable= $threes_disable = $fours_disable = $fives_disable = $sixes_disable =
		$fh_disable = $toak_disable = $carre_disable = $ss_disable = $ls_disable = $yahtzee_disable = $yb_disable = $chance_disable = "disabled";
	}
}

//reset button
if(isset($_POST['reset'])){
	$dice1 = $dice2 = $dice3 = $dice4 = $dice5 = "";
	$_SESSION['roll_count']=0;
	$_SESSION['aces']= $_SESSION['twos']= $_SESSION['threes']= 
	$_SESSION['fours']= $_SESSION['fives']= $_SESSION['sixes']=
	$_SESSION['toak']= $_SESSION['carre']= $_SESSION['fh']=
	$_SESSION['ss']= $_SESSION['ls']= $_SESSION['chance']=
	$_SESSION['yahtzee']= $_SESSION['yb']= "";
	$_SESSION['total_ls'] = $_SESSION['$total_us'] = $_SESSION['total'] = 0;
	$aces_disable= $twos_disable= $threes_disable = $fours_disable = $fives_disable = $sixes_disable = "";
	$fh_disable = $toak_disable = $foak_disable = $ss_disable = $ls_disable = $yahtzee_disable = $chance_disable = "";
	$checked1 = $checked2 = $checked3 = $checked4 = $checked5 = "";
	$disable_check = "disabled";
	$disable_submit = "disabled";
	$_SESSION['total_us'] = 0;
	$message = "nog 3 worpen";
}

//if everything is filled in, end the game
if(is_numeric($_SESSION['aces']) && is_numeric($_SESSION['twos']) && is_numeric($_SESSION['threes']) && 
	is_numeric($_SESSION['fours']) && is_numeric($_SESSION['fives']) && is_numeric($_SESSION['sixes']) &&
	is_numeric($_SESSION['toak']) && is_numeric($_SESSION['carre']) && is_numeric($_SESSION['fh']) &&
	is_numeric($_SESSION['ss']) && is_numeric($_SESSION['ls']) && is_numeric($_SESSION['chance']) &&
	is_numeric($_SESSION['yahtzee'])){
	$end_message = "Eindscore: ".$_SESSION['total']." pt.";
	$disable_roll = "disabled";
	$disable_submit = "disabled";
	$message = "";
} 

//if the page is loaded, the request method is GET instead of POST.
//if this is the case, restart the game.
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$dice1 = $dice2 = $dice3 = $dice4 = $dice5 = "";
	$_SESSION['roll_count'] = 0;
	$_SESSION['aces']= $_SESSION['twos']= $_SESSION['threes']= $_SESSION['fours']= $_SESSION['fives']= $_SESSION['sixes']=
	$_SESSION['toak']= $_SESSION['carre']= $_SESSION['fh']= $_SESSION['ss']= $_SESSION['ls']= $_SESSION['chance']=
	$_SESSION['yahtzee']= $_SESSION['yb']= "";
	$_SESSION['total_ls'] = $_SESSION['$total_us'] = $_SESSION['total'] = 0;
	$aces_disable= $twos_disable= $threes_disable = $fours_disable = $fives_disable = $sixes_disable = "";
	$fh_disable = $toak_disable = $foak_disable = $ss_disable = $ls_disable = $yahtzee_disable = $chance_disable = "";
	$checked1 = $checked2 = $checked3 = $checked4 = $checked5 = "";
	$disable_check = "disabled";
	$disable_submit = "disabled";
	$_SESSION['total_us'] = 0;
	$message = "nog 3 worpen";
}

?>
