<html>
<body>

<h3>Array #1 - Keys and Values</h3>

My favourite bands are:

<ul>

<?php

// Define array
$artists = array('Metallica', 'Evanescence', 'Linkin Park', "Guns 'n Roses");

//sort($artists);

// Loop over it and print array elements
foreach ($artists as $a) {
    echo '<li>'.$a.'</li>';
}

?>

</ul>

</body>
</html>