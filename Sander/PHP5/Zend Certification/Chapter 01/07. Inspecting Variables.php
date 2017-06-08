<?php

/*
| ------------------------------
| Inspecting Variables with print_r
| ------------------------------
*/

// Header
echo "<h3>Inspecting Variables with print_r</h3>";

// Build array
$array = array(
	'foo',
	'bar',
	'baz',
);

// Print array
echo '<pre>';
print_r($array);
echo '</pre>';

// Build object
$obj = new stdClass();
$obj->foo = 'bar';
$obj->baz = 'bat';

// Print object
echo '<pre>';
print_r($obj);
echo '</pre>';



/*
| ------------------------------
| Inspecting Variables with var_dump
| ------------------------------
*/

// Header
echo "<h3>Inspecting Variables with var_dump</h3>";

var_dump(
	null,
	false,
	"",
	1,
	2.3,
	array(
		"foo",
		"bar",
		"baz" => 1.23,
	)
);



/*
| ------------------------------
| Inspecting Variables with var_export
| ------------------------------
*/

// Header
echo "<h3>Inspecting Variables with var_export</h3>";

// Build array
$array = array(
	"foo" => "bar",
	"baz" => "bat",
);

// Export array
echo '<pre>';
var_export($array);
echo '</pre>';

// Build object
$obj = new stdClass();
$obj->foo = 'bar';
$obj->baz = 'bat';

// Export object
echo '<pre>';
var_export($obj);
echo '</pre>';

?>
