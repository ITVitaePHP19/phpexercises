<html>
<body>

<?php

echo '<h3>Array #1 - Add on the fly</h3>';

// Define an array
$pasta = array('Spaghetti', 'Penne', 'Macaroni');

// Add an element to the beginning
array_unshift($pasta, 'Ravioli');

// Add an element to the end
array_push($pasta, 'Tagliatelle');

echo '<pre>'.print_r($pasta, true).'</pre>';

?>

<br />
<br />

<?php

echo '<h3>Array #2 - Remove on the fly</h3>';

// Define an array
$pasta = array('Spaghetti', 'Penne', 'Macaroni', 'Tagliatelle');

// Remove an element from the end
array_pop($pasta);

// Remove an element from the beginning
array_shift($pasta);

// Change second variable
$pasta[1] = 'Ravioli';

echo '<pre>'.print_r($pasta, true).'</pre>';

?>

</body>