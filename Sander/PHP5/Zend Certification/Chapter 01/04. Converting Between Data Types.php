<?php

$x = 10.88;

echo $x . ' (variable)<br>';
echo (int)$x . ' (integer)<br>';
echo (float)$x . ' (float)<br>';
echo (bool)$x . ' (boolean)<br>';
echo (string)$x . ' (string)<br>';

echo '<br>';

$a = 10;
$b = 10.88;
$c = '10.88';
$d = true;
$e = 'true';

echo $a . ' (' . gettype($a) . ')<br>';
echo $b . ' (' . gettype($b) . ')<br>';
echo $c . ' (' . gettype($c) . ')<br>';
echo $d . ' (' . gettype($d) . ')<br>';
echo $e . ' (' . gettype($e) . ')<br>';

?>