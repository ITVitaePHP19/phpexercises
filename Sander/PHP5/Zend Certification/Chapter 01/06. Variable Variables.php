<?php

/*
| ------------------------------
| Variable Variables
| ------------------------------
*/

// Header
echo "<h3>Variable Variables</h3>";

$name = 'foo';
$$name = 'bar';
$$$name = 'I still hate foobar.';

echo $name . '<br>' . $$name . '<br>' . $foo . '<br>' . $bar;

/*
| ------------------------------
| Circumventing naming constraints
| ------------------------------
*/

// Header
echo "<h3>Circumventing naming constraints</h3>";

// Giving an 'illegal' variable name
$name = '123';
$$name = '456';

// Echo using curly brackets to make the name 'legal'
echo ${'123'};

// However, this does not work
// $12 = 34;
// echo ${'12'}


?>
