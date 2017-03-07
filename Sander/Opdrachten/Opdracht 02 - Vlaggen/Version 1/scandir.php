<pre>

<?php

// Scan directory
$dir = "images/";
$files = scandir($dir);

print_r($files);

echo "<br><br>";

// Remove first two entries	
array_shift($files);
array_shift($files);

// Replace underscore with space
$files = str_replace('_', ' ', $files);

// Strip array of file extension
/*$k = count($files);
for ($i = 0; $i < $k; $i++) {
   $extpos = strrpos($files[$i],".");
   $files[$i] = substr($files[$i],0,$extpos);
}

print_r($files);*/

// PHP >= 5.3
$files = array_map(
	function($e){
		return pathinfo($e, PATHINFO_FILENAME);
	}
, $files);

// Dump
print_r($files);

// Pick 4 random numbers
$random = array_rand($files, 4);

print_r($random);

echo "<br><br>";

// Shuffle array
shuffle($random);

print_r($random);

echo "<br><br>";

// Assign random numbers to countries
$first = $files[$random[0]];
$second = $files[$random[1]];
$third = $files[$random[2]];
$forth = $files[$random[3]];

// Pick random flag as correct answer
$correct = $files[$random[mt_rand(0, 3)]];

// Echo answers
echo $first;
echo '<br>';
echo $second;
echo '<br>';
echo $third;
echo '<br>';
echo $forth;
echo '<br>';
echo '<br>';
echo $correct;

?>

</pre>