<?php
if (isset($_POST['convert'])) {
	convertDistance();
}

function convertDistance() {
		$input = $_POST['in'];
		$kilometers = round($input * 0.621371192, 1);
		$miles = round($input * 1.609344, 1);
			if ($_POST['distance'] == "kilometers") {
	// posted in name 'distance' radio button and value of form == "kilometers"
			echo "$input miles is $kilometers kilometer";
		}
		elseif ($_POST['distance'] == "miles") {
	// posted in name 'distance' radio button and value of form == "miles"
			echo "$input kilometer is $miles miles";
		}
}
?>
