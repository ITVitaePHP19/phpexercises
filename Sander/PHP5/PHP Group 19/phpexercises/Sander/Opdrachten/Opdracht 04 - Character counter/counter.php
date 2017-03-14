<?php

// Set variables
$file = str_split(file_get_contents($_POST['file']));
$char = $_POST['char'];
$total = 0;

// Loop through $file
foreach ($file as $counter) {

	// Check if equal to $char
	if ($counter == $char) {
		$total++;
	}

}

if ($total == 1) {
	echo "The character '".$char."' appears 1 time in the document.";
}
else {
	echo "The character '".$char."' appears ".$total." times in the document.";
}

?>