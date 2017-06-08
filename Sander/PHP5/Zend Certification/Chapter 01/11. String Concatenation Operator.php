<?php

/*
| ------------------------------
| String Concatenation Operator
| ------------------------------
*/

// Header
echo "<h3>String Concatenation Operator</h3>";

// Set variable
$string = "foo" . "bar"; // $string now contains "foobar"
$string2 = "baz"; // $string2 now contains "baz"

// Edit $string
$string .= $string2;
// $string now contains "foobarbaz"
// This is shorthand for $string = $string . $string2

// Echo $string
echo $string;

?>