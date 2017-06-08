<?php

/*
| ------------------------------
| Arithmetic Operators
| ------------------------------
*/

// Header
echo "<h3>Arithmetic Operators</h3>";

// Addition
$a = 1 + 3.5;
// Subtraction
$b = 4 - 2;
// Multiplication
$c = 8 * 3;
// Division
$d = 15 / 5;
// Modulus
$e = 23 % 7;
// Power
$f = 2 ** 3;

// Echo results
echo "$a, $b, $c, $d, $e, $f";



/*
| ------------------------------
| Incrementing & Decrementing Operators
| ------------------------------
*/

// Header
echo "<h3>Incrementing & Decrementing Operators</h3>";

// Assign integer and increment and decrement
$a = 1; // Assign integer
echo "$a, ";
echo $a++ . ", ";
echo ++$a . ", ";
echo $a-- . ", ";
echo --$a . ". ";



/*
| ------------------------------
| Positioning of increment/decrement operator is important
| ------------------------------
*/

// Header
echo "<h3>Positioning of increment/decrement operator is important</h3>";

// Set variables, string will be converted to integer 0
$a = (int) 'Test'; // $a == 0
$b = (int) 'Test'; // $b == 0

// Echo increment operators
echo "$a, " . ++$a . ", $a<br>";
echo "$b, " . $b++ . ", $b<br>";

?>
