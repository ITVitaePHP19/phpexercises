<?php

// Set variables
$flags = array();
$flags[0] = "Afghanistan";
$flags[1] = "Albania";
$flags[2] = "Algeria";
$flags[3] = "Andorra";

// Set default visibility for alert
$correct = 'visibility: hidden;';
$wrong = 'visibility: hidden;';

// Create random number
$arrSize = count($flags) - 1;
$rand = mt_rand (0, $arrSize);

// Select flag
$flag = $flags[$rand];

echo $rand;

// Check if submitted
if (isset($_POST['submit'])) {

	// Check if selected
	if (isset($_POST['answer'])) {
	
		// Case answer
		switch ($_POST['answer']) {

			//echo

			// If correct
			case $rand:
//				$correct = 'visibility: display;';
//				$wrong = 'visibility: hidden;';
				echo "Correct";
				break;

			// If wrong
			default:
//				$correct = 'visibility: hidden;';
//				$wrong = 'visibility: display;';
				echo "wrong";
				break;

		}

	}

	else {
		echo "Please select an answer";
	}

}

?>