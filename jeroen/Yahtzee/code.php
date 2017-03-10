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
$counter = 1;
if(!isset($_SESSION['roll_count'])) $_SESSION['roll_count'] = 0;

//evaluate if checkboxes are checked
if(isset($_POST['check1'])){$check1 = true; $checked1 = "checked='checked'";}else{$check1=false; $checked1="";}
if(isset($_POST['check2'])){$check2 = true; $checked2 = "checked='checked'";}else{$check2=false; $checked2="";}
if(isset($_POST['check3'])){$check3 = true; $checked3 = "checked='checked'";}else{$check3=false; $checked3="";}
if(isset($_POST['check4'])){$check4 = true; $checked4 = "checked='checked'";}else{$check4=false; $checked4="";}
if(isset($_POST['check5'])){$check5 = true; $checked5 = "checked='checked'";}else{$check5=false; $checked5="";}

//if the dice has a value and its checkbox is checked, keep the current dice value.
//else the dice-value will be a random number from 1 to 6.
if(isset($_POST['dice1']) && $check1 == true){$dice1=$_POST['dice1'];}else $dice1=(mt_rand(1,6));
if(isset($_POST['dice2']) && $check2 == true){$dice2=$_POST['dice2'];}else $dice2=(mt_rand(1,6));
if(isset($_POST['dice3']) && $check3 == true){$dice3=$_POST['dice3'];}else $dice3=(mt_rand(1,6));
if(isset($_POST['dice4']) && $check4 == true){$dice4=$_POST['dice4'];}else $dice4=(mt_rand(1,6));
if(isset($_POST['dice5']) && $check5 == true){$dice5=$_POST['dice5'];}else $dice5=(mt_rand(1,6));

$freq = "";
$totaldice = "";
$array = array($dice1, $dice2, $dice3 ,$dice4, $dice5);

function getDiceArray() {
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

//Count the number of rolls. After 3 throws, a choice has to be made.
if ($_SESSION['roll_count'] == 0) $message = "nog 3 worpen";
if (isset($_POST['roll'])){
	if(!isset($_POST['choice'])){
		$_SESSION['roll_count'] += $counter;
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
		$fh_disable = $toak_disable = $carre_disable = $ss_disable = $ls_disable = $yahtzee_disable = $chance_disable = "disabled";
	}
}

//if the page is loaded for the first time or is refreshed, the request method is GET instead of POST.
//if this is the case, empty all dices, and reset the roll count.
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$dice1 = $dice2 = $dice3 = $dice4 = $dice5 = "";
	$_SESSION['roll_count'] = 0;
}

//aces
if(isset($_POST['choice']) && ($_POST['choice']) == "aces"){
	$_SESSION['aces'] = 0;
	$array = getDiceArray();
	foreach($array as $key => $value){
		if($value == 1){
			$_SESSION['aces']++;
		}
	}
}
if (is_numeric($_SESSION['aces'])) $aces_disable = "disabled";

//twos
if(isset($_POST['choice']) && ($_POST['choice']) == "twos"){
	$_SESSION['twos'] = 0;
	$array = getDiceArray();
	foreach($array as $key => $value){
		if($value == 2){
			$_SESSION['twos'] += 2;
		}
	}
}
if (is_numeric($_SESSION['twos'])) $twos_disable = "disabled";

//threes
if(isset($_POST['choice']) && ($_POST['choice']) == "threes"){
	$array = getDiceArray();	
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
	$array = getDiceArray();
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
	$array = getDiceArray();
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
	$array = getDiceArray();
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
	$array = getDiceArray();	
	if(in_array(3, $freq) || in_array(4, $freq) || in_array(5, $freq)){ // check if a value appears 3 or more times in array
		$_SESSION['toak'] = $totaldice;
	}
	else{
		$_SESSION['toak'] = 0;
	}
}
if (is_numeric($_SESSION['toak'])) $toak_disable = "disabled";

//carre
if (isset($_POST['choice']) && ($_POST['choice'] == "carre")){
	$array = getDiceArray();
	$freq = array_count_values($array);
	if(in_array(4, $freq) || in_array(5, $freq)){	//check if a value appears 4 or more times in array
		$_SESSION['carre'] = $totaldice;
	}
	else{
		$_SESSION['carre'] = 0;
	}
}
if (is_numeric($_SESSION['carre'])) $carre_disable = "disabled";


//full house
if (isset($_POST['choice']) && ($_POST['choice'] == "fh")){
	$array = getDiceArray();
	if(in_array(2, $freq) && in_array(3, $freq)){	//if a value appears 2 times in an array and another 3 times
		$_SESSION['fh'] = 25;
	}
	else{
		$_SESSION['fh'] = 0;
	}
}
if (is_numeric($_SESSION['fh'])) $fh_disable = "disabled";

//small straight
if (isset($_POST['choice']) && ($_POST['choice'] == "ss")){
	$array = getDiceArray();
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
	$array = getDiceArray();
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
	$array = getDiceArray();
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
	$array = getDiceArray();
	if(($dice1==$dice2)&&($dice2==$dice3)&&($dice3==$dice4)&&($dice4==$dice5)){
		$_SESSION['yb'] += 100;
	}
	else{
		$_SESSION['yb'] = 0;
	}
}

//chance
if(isset($_POST['choice']) && ($_POST['choice'] == "chance")){
	$array = getDiceArray();
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
	}
	elseif(isset($_POST['choice'])){
		$disable_submit = "disabled";
		$_SESSION['roll_count'] = 0;
		$checked1 = $checked2 = $checked3 = $checked4 = $checked5 = "";
		$dice1 = $dice2 = $dice3 = $dice4 = $dice5 = "";
		$disable_check = "disabled";
		$message = "nog 3 worpen";
		$aces_disable= $twos_disable= $threes_disable = $fours_disable = $fives_disable = $sixes_disable =
		$fh_disable = $toak_disable = $carre_disable = $ss_disable = $ls_disable = $yahtzee_disable = $chance_disable = "disabled";
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

?>
