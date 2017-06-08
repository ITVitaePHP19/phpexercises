<?php

/*
| ------------------------------
| Casting to an object
| ------------------------------
*/

// Header
echo "<h3>Casting to an object</h3>";

// Create object
$obj = (object) [
	"foo" => "bar",
	"baz" => "bat"
];

// Vardump object
var_dump($obj);



/*
| ------------------------------
| Casting to different types
| ------------------------------
*/

// Header
echo "<h3>Casting to different types</h3>";

// Set variable
$x = '33.5';

// Cast several types
echo intval($x) . '<br>';
echo floatval($x) . '<br>';
echo strval($x) . '<br>';
echo boolval($x) . '<br>';

echo '<br>';

// Set $x to an integer
settype($x, "integer");
echo $x . ' ' . gettype($x) . '<br>';



/*
| ------------------------------
| Detecting types
| ------------------------------
*/

// Header
echo "<h3>Detecting types</h3>";

// Set variable
$y = 123.4;

// Detect type
if (is_int($y)) {
	echo 'This variable is an integer.<br>';
}
elseif (is_float($y)) {
	echo 'This variable is a floating point.<br>';
}
elseif (is_string($y)) {
	echo 'This variable is a string.<br>';
}
elseif (is_bool($y)) {
	echo 'This variable is a boolean.<br>';
}
elseif (is_null($y)) {
	echo 'This variable is NULL.<br>';
}
elseif (is_array($y)) {
	echo 'This variable is an array.<br>';
}
elseif (is_object($y)) {
	echo 'This variable is an object.<br>';
}
else {
	echo 'This variable is something else. It might even be alien.';
}



/*
| ------------------------------
| Detecting types through an array
| ------------------------------
*/

// Header
echo "<h3>Detecting types through an array</h3>";

// Set variable
$z = 123.45;

// Set array with keys as test and value as result
$types = array(
	'is_int' => 'an integer',
	'is_float' => 'a floating point',
	'is_string' => 'a string',
	'is_bool' => 'a boolean',
	'is_null' => 'NULL',
	'is_array' => 'an array',
	'is_object' => 'an object'
);

// Loop through array
foreach ($types as $key => $value) {
	if ($key($z)) {
		echo 'This variable is ' . $value;
	}
}



/*
| ------------------------------
| Why does this not work?
| ------------------------------
*/

/*
// Header
echo "<h3>Using switch to detect type</h3>";

switch ($x) {
	case 'is_int':
		echo 'This variable is an integer.';
		break;
	
	case 'is_float':
		echo 'This variable is a floating point.';
		break;
	
	case 'is_string':
		echo 'This variable is a string.';
		break;
	
	case 'is_bool':
		echo 'This variable is a boolean.';
		break;
	
	case 'is_null':
		echo 'This variable is NULL.';
		break;
	
	case 'is_array':
		echo 'This variable is an array.';
		break;
	
	case 'is_object':
		echo 'This variable is an object.';
		break;
	
	default:
		echo 'This is the default value.';
		break;
}
*/

?>
