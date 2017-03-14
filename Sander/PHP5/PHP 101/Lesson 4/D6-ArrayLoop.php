<html>
<body>

<h3>Array #1 - Loop de loop</h3>

My favourite bands are:

<ol>

<?php

// Define array
$artists = array('Metallica', 'Evanescence', 'Linkin Park', "Guns 'n Roses");

echo '<pre>'.print_r($artists, true).'</pre>';

// Loop over it and print array elements
for ($x = 0; $x < sizeof($artists); $x++) {
    echo '<li>'.$artists[$x].'</li>';
}

?>

</ol>

</body>