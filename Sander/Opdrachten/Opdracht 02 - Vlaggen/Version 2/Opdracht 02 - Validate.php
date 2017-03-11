<?php
// Set session values
if ($_SESSION == '') {
$_SESSION['count'] = 0;
$_SESSION['score'] = 0;
}

// Check if answer is set and if answer is $correctAnswer
if (isset($_POST['answer']) && $_POST['answer'] == $_SESSION['correctAnswer']) {
	$_SESSION['count']++;
	$_SESSION['score']++;
	echo $_SESSION['count'];
}
// Check if answer is set and if answer !is $correctAnswer
elseif (isset($_POST['answer']) && $_POST['answer'] != $_SESSION['correctAnswer']) {
	$_SESSION['count'];
}
// Else echo blank
else {
	echo "";
}

// Set variable for button
if ($_SESSION['count'] < 10) {
	$button = 'Next flag';
}
elseif ($_SESSION['count'] = 10) {
	$button = 'Show result';
}
?>