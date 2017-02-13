<?php
if (isset($_POST['convert'])) {
	convertDistance();
}


function convertDistance() {
		$input = $_POST['in'];
		$kilometers = $input * 0.621371192;
		$miles = $input * 1.609344;
			if ($_POST['distance'] == "kilometers") {
	// posted in name 'distance' radio button and value of form == "kilometers"
			echo $input . "<p>miles is</p>" . $kilometers . "<p>kilometer</p>";
		}
		elseif ($_POST['distance'] == "miles") {
	// posted in name 'distance' radio button and value of form == "miles"
			echo $input . "<p>kilometer is</p>" . $miles . "<p>miles</p>";;
		}
}
?>
