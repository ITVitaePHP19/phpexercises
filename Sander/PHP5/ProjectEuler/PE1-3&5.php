<html>
<body>

<?php

$total = 0;

/*for ($test = 1; $test < 1000; $test++) {
	if ($test % 3 == 0) {
	$total += $test;
	}
	elseif ($test % 5 == 0) {
	$total += $test;
	}
}*/

for ($test = 1; $test < 1000; $test++) {
	if (is_int($test / 3) || is_int($test / 5)) {
	$total += $test;
	}
}

echo $total;

?>

<br />
<br />
<br />

<?php

$to_be_summed = array();

for ($i = 1; $i < 1000; ++$i)
{
    if ($i % 3 === 0 || $i % 5 === 0)
    {
        $to_be_summed[] = $i;
    }
}
echo array_sum ($to_be_summed);

echo '<br>';

// See which numbers met the criteria
echo '<pre>'.print_r($to_be_summed, true).'</pre>';

?>