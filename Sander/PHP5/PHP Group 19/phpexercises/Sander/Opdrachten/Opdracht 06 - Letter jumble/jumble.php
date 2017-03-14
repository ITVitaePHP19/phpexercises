<head>
	<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<?php

$text = $_POST['text'];

echo '<div class="content">';

// Check if 'post' is set
if (isset($_POST['submit'])) {

	if (empty($text)) {
		echo 'Please type in some text first!';
	}
	else {
		jumble($text);
	}

}

echo "</div>";

// Jumble $text
function jumble($text) {
	
	// Split string
	$text = str_split($text);

	// Give random style to values
	foreach ($text as $i) {
		echo '<div class="text" style="
			background-color: ' . color() . ';
			font-family: ' . font() . ';
			font-size: ' . size() . ';
			transform: rotate(' . rotate() . 'deg);
			">'
			. $i .
			"</div>";
	}

}

// Create random color
function color() {
	$color = dechex(mt_rand(0x000000, 0xFFFFFF));

	return $color;
}

// Create random rotation
function rotate() {
	$i = mt_rand(0, 1);
	switch ($i) {

		// If 0, backwards rotation
		case 0:
			$rotate = mt_rand(315, 360);
			break;

		// If 1, forwards rotation
		case 1:
			$rotate = mt_rand(0, 45);
			break;
	}

	return $rotate;
}

// Create random size
function size() {
	$size = mt_rand(50, 100);

	return $size;
}

// Create random font
function font() {
	$font = array('Arial', 'Trebuchet MS', 'Times New Roman', 'Verdana');
	$r = mt_rand(0, (count($font) - 1));

	return $font[$r];
}

?>