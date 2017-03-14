<html>
<body>

<?php

echo '<h3>Array #1 - List with numbers</h3>';

// Define an array
$pasta[0] = 'Spaghetti';
$pasta[1] = 'Penne';
$pasta[2] = 'Macaroni';

echo '<pre>'.print_r($pasta, true).'</pre>';

echo '<br />'.$pasta[0];

?>

<br />
<br />

<?php

echo '<h3>Array #2 - List with words</h3>';

// Define an array
$menu['breakfast'] = 'Bacon and Eggs';
$menu['lunch'] = 'Roast Beef';
$menu['dinner'] = 'Lasagna';

echo '<pre>'.print_r($menu, true).'</pre>';

echo '<br />'.$menu['breakfast'];

?>

</body>