<?php

// Set session values
if ($_SESSION == array()) {
	$_SESSION['count'] = 1;
	$_SESSION['score'] = 0;
}

// Check if answer is set and if answer is $correctAnswer
if (isset($_POST['answer']) && $_POST['answer'] == $_SESSION['correctAnswer']) {
	$_SESSION['count']++;
	$_SESSION['score']++;
}
// Check if answer is set and if answer !is $correctAnswer
elseif (isset($_POST['answer']) && $_POST['answer'] != $_SESSION['correctAnswer']) {
	$_SESSION['count']++;
}
// Else echo blank
else {
	echo "";
}

// Set variable for button
$_SESSION['max'] = 10;
$max = $_SESSION['max'];

if ($_SESSION['count'] < $max) {
	$button = 'Next flag';
}
elseif ($_SESSION['count'] == $max) {
	$button = 'Show result';
}
elseif ($_SESSION['count'] > $max) {
	$button = 'Try again';
}

?>