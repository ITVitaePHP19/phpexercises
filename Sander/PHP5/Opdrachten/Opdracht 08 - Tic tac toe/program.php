<?php

$buttons = array('but0', 'but1', 'but2', 'but3', 'but4', 'but5', 'but6', 'but7', 'but8');


// Set empty session variables
foreach ($buttons as $but) {
	if (empty($_SESSION[$but])) {
		$_SESSION[$but] = '';
	}
}

// Set counter
if (empty($_SESSION['counter']) || $_SESSION['counter'] >= 9) {
	$_SESSION['counter'] = 0;
}


// Set buttons
foreach ($buttons as $but) {
	if (isset($_POST[$but])) {
	
		// X's turn
		if ($_SESSION['counter'] % 2 == 0) {
			$_SESSION[$but] = 'X';
		}
		// O's turn
		else {
			$_SESSION[$but] = 'O';
		}
		// Up counter
		$_SESSION['counter']++;
	}
}


// Set button variables
$but0 = $_SESSION['but0'];
$but1 = $_SESSION['but1'];
$but2 = $_SESSION['but2'];
$but3 = $_SESSION['but3'];
$but4 = $_SESSION['but4'];
$but5 = $_SESSION['but5'];
$but6 = $_SESSION['but6'];
$but7 = $_SESSION['but7'];
$but8 = $_SESSION['but8'];

// Reset
if (isset($_POST['reset'])) {
	session_destroy();
	$but0 = '';
	$but1 = '';
	$but2 = '';
	$but3 = '';
	$but4 = '';
	$but5 = '';
	$but6 = '';
	$but7 = '';
	$but8 = '';
	$title = "Player X's turn";
}

// CSS side of things

// Set variables
$but0dis = '';
$but1dis = '';
$but2dis = '';
$but3dis = '';
$but4dis = '';
$but5dis = '';
$but6dis = '';
$but7dis = '';
$but8dis = '';

// Check if button need to be disabled
if ($but0 != '') {
	$but0dis = 'disabled';
}
if ($but1 != '') {
	$but1dis = 'disabled';
}
if ($but2 != '') {
	$but2dis = 'disabled';
}
if ($but3 != '') {
	$but3dis = 'disabled';
}
if ($but4 != '') {
	$but4dis = 'disabled';
}
if ($but5 != '') {
	$but5dis = 'disabled';
}
if ($but6 != '') {
	$but6dis = 'disabled';
}
if ($but7 != '') {
	$but7dis = 'disabled';
}
if ($but8 != '') {
	$but8dis = 'disabled';
}


// Game over

// 012, 345, 678, 036, 147, 258, 048 & 246

// Player X has won
if (($but0 == 'X' && $but1 == 'X' && $but2 == 'X') || 
	($but3 == 'X' && $but4 == 'X' && $but5 == 'X') ||
	($but6 == 'X' && $but7 == 'X' && $but8 == 'X') ||
	($but0 == 'X' && $but3 == 'X' && $but6 == 'X') ||
	($but1 == 'X' && $but4 == 'X' && $but7 == 'X') ||
	($but2 == 'X' && $but5 == 'X' && $but8 == 'X') ||
	($but0 == 'X' && $but4 == 'X' && $but8 == 'X') ||
	($but2 == 'X' && $but4 == 'X' && $but6 == 'X')) {

		// Disable buttons
		$but0dis = 'disabled';
		$but1dis = 'disabled';
		$but2dis = 'disabled';
		$but3dis = 'disabled';
		$but4dis = 'disabled';
		$but5dis = 'disabled';
		$but6dis = 'disabled';
		$but7dis = 'disabled';
		$but8dis = 'disabled';

		// Change title
		$title = 'Player X has won!';
}
// Player O has won
elseif (($but0 == 'O' && $but1 == 'O' && $but2 == 'O') || 
	($but3 == 'O' && $but4 == 'O' && $but5 == 'O') ||
	($but6 == 'O' && $but7 == 'O' && $but8 == 'O') ||
	($but0 == 'O' && $but3 == 'O' && $but6 == 'O') ||
	($but1 == 'O' && $but4 == 'O' && $but7 == 'O') ||
	($but2 == 'O' && $but5 == 'O' && $but8 == 'O') ||
	($but0 == 'O' && $but4 == 'O' && $but8 == 'O') ||
	($but2 == 'O' && $but4 == 'O' && $but6 == 'O')) {

		// Disable buttons
		$but0dis = 'disabled';
		$but1dis = 'disabled';
		$but2dis = 'disabled';
		$but3dis = 'disabled';
		$but4dis = 'disabled';
		$but5dis = 'disabled';
		$but6dis = 'disabled';
		$but7dis = 'disabled';
		$but8dis = 'disabled';

		// Change title
		$title = 'Player O has won!';
}
// Ongoing game
else {
	if ($_SESSION['counter'] >= 9) {
		$title = "It's a draw!";
	}
	elseif ($_SESSION['counter'] % 2 == 0) {
		$title = "Player X's turn";
	}
	else {
		$title = "Player O's turn";
	}
}

?>