<?php

/*
| ------------------------------
| Determining If a Variable Exists
| ------------------------------
*/

// Header
echo "<h3>Determining If a Variable Exists</h3>";

// Set variable
$x = 'John Cena';

// Test if variable exists
if (isset($x)) {
	echo "Thank God, \$x exists, and his name is $x!";
}
elseif (!isset($x)) {
	echo "Noooo! $x is no more!";
}
else {
	echo "Why not use an else instead of elsif?";
}



/*
| ------------------------------
| Determining If a Variable is Empty
| ------------------------------
*/

// Header
echo "<h3>Determining If a Variable is Empty</h3>";

// Set variable
$variable = "0";

// Test if empty
if (empty($variable)) {
	echo "\$variable is empty.";
}
else {
	echo "\$variable is not empty.";
}



/*
| ------------------------------
| Determining If a Function is Empty
| ------------------------------
*/

// Header
echo "<h3>Determining If a Function is Empty</h3>";

// Set function
function MyFunction() {
	echo "This is not a drill.<br>";
}

// Test if function is empty
if (empty(MyFunction())) {
	echo "This does something different than I expected.";
}
else {
	echo "PHP can be very awkward.";
}

?>
