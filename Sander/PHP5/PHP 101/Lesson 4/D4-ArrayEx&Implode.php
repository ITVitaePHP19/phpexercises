<html>
<body>

<?php

echo '<h3>Array #1 - Explode</h3>';

// Define CSV string
$str = 'Red, Blue, Green, Yellow';
$delimit = ', ';

// Split into individual words
$colors = explode($delimit, $str, 3);

echo '<pre>'.print_r($colors, true).'</pre>';

?>

<br />
<br />

<?php

echo '<h3>Array #2 - Implode</h3>';

// Define array
$colors = array ('Red', 'Blue', 'Green', 'Yellow');

// Join into single string with 'and'
// Returns 'Red and Blue and Green and Yellow'
$str = implode(' and ', $colors);

print $str;

?>

</body>