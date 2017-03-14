<html>
<body>

<?php

echo '<h3>Array #1 - Sort alphabetically or numerically</h3>';

// Define an array
$pasta = array('Spaghetti', 'Penne', 'Macaroni');

// Returns the array sorted alphabetically
sort($pasta);
print_r($pasta);

print "<br />";

// Define an array
$bits = array('256', '1024', '512');

// Returns the array sorted alphabetically in reverse
rsort($bits);
print_r($bits);

?>

</body>