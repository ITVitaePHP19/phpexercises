<pre>

<?php

// Scan directory
$dir = "images/";
$files = scandir($dir);

// Remove first two entries	
array_shift($files);
array_shift($files);

// Replace underscore with space
$clean = str_replace('_', ' ', $files);

// Strip array of file extension
// PHP >= 5.3
$clean = array_map(
	function($e){
		return pathinfo($e, PATHINFO_FILENAME);
	}
, $clean);

// Pick 4 random numbers
$random = array_rand($clean, 4);

// Shuffle array
shuffle($random);

// Assign random numbers to countries
$first = $clean[$random[0]];
$second = $clean[$random[1]];
$third = $clean[$random[2]];
$forth = $clean[$random[3]];

// Echo answers
echo $first;
echo '<br>';
echo $second;
echo '<br>';
echo $third;
echo '<br>';
echo $forth;
echo '<br>';

// Pick random number as correct answer
$rand = mt_rand(0, 3);

// Bind $rand to flag
$correctFlag = $files[$random[$rand]];

echo '<br>'.$correctFlag.'<br><br>';

// Bind $rand to answer
$correctAnswer = $clean[$random[$rand]];

echo $correctAnswer;

$_SESSION['correctAnswer'] = $correctAnswer;

?>

</pre>