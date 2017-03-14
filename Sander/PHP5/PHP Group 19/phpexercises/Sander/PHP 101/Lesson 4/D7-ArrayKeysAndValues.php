<html>
<body>

<h3>Array #1 - Keys and Values</h3>

<?php

// Define an array
$menu = array('breakfast' => 'bacon and eggs', 'lunch' => 'roast beef', 'dinner' => 'lasagna');

// Print array
print_r($menu);

print "<br />";

// Return the array keys ('breakfast', 'lunch', 'dinner') with numeric indices
$result = array_keys($menu);
print_r($result);

print "<br />";

// Return the array values ('bacon and eggs', 'roast beef', 'lasagna') with numeric indices
$result = array_values($menu);
print_r($result);

?>

</body>
</html>