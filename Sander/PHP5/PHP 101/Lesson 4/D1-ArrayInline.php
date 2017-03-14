<html>
<body>

<?php

echo '<h3>Array #1 - Oneliner with numbers</h3>';

$number = 2;

// Define an array
$pizzaToppings = array('Onion', 'Tomato', 'Cheese', 'Anchovies', 'Ham', 'Pepperoni');

// Overwrite second variable
$pizzaToppings[2] = 'Green Olives';

// Print arrays content
print_r($pizzaToppings);

echo '<br />'.$pizzaToppings[$number];

?>

<br />
<br />

<?php

echo '<h3>Array #2 - Oneliner with words</h3>';

// Define an array
$fruits = array('red' => 'Apple', 'yellow' => 'Banana', 'purple' => 'Plum', 'green' => 'Grape');

echo '<pre>'.print_r($fruits, true).'</pre>';

echo '<br />'.$fruits['red'];

?>

<br />
<br />

<?php

echo '<h3>Array #3 - Oneliner with variables</h3>';

$red = 'apple';

// Define an array
$fruits = array($red => 'Apple', 'yellow' => 'Banana', 'purple' => 'Plum', 'green' => 'Grape');

echo '<pre>'.print_r($fruits, true).'</pre>';

echo '<br />'.$fruits['apple'];

?>

</body>