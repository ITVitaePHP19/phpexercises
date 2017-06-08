<?php

/*
| ------------------------------
| Defining constants
| ------------------------------
*/

// Header
echo "<h3>Defining constants</h3>";

// Define constant
define('EMAIL', 'davey.jones@php.net'); // Valid constant name

// Echo constant
echo EMAIL;



/*
| ------------------------------
| Use constant in statement
| ------------------------------
*/

// Header
echo "<h3>Use constant in statement</h3>";

// Define constant
define('USE_XML', true);

// Use constant for statement
if (USE_XML) {
	echo "USE_XML is true.";
}
else {
	echo "USE_XML is false.";
}



/*
| ------------------------------
| Use 'const' keyword to define constant
| ------------------------------
*/

// Header
echo "<h3>Use 'const' keyword to define constant</h3>";

// Define constant
const EMAIL2 = 'davey.jones@php.netniet';

// Echo constant
echo EMAIL2;



/*
| ------------------------------
| Constant scalar expressions
| ------------------------------
*/

// Header
echo "<h3>Constant scalar expressions</h3>";

// Define constant
const DOMAIN = "@php.netwel";
const EMAIL3 = "davey.jones" . DOMAIN;

// Echo constant
echo EMAIL3;

?>
