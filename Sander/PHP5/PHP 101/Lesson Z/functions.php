<?php
// Ability to enter a default value for a value in function
function familyName($fname, $year = 'later than 1900') {
	echo "$fname Refsnes. Born in $year. <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim");
?>

<br>
<br>

<?php
// Use of function in echo
function sum($x, $y) {
	$z = $x + $y;
	return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>

<br>
<br>

<?php
// Use foreach to let a function loop through an array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";

foreach ($cars as $car) {
	arr($car);
}

function arr($bar) {
	echo "I like $bar.<br>";
}

?>

<br>
<br>

<?php
// Functions in functions don't exist until parent is called
function foo() {
	function bar() {
		echo "I don't exist until foo() is called.\n";
	}
}

// We can't call bar() yet since it doesn't exist.

foo();

//Now we can call bar(), foo()'s processing has made it accessible.

bar();

?>

<?php
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

echo '<br><br>';

recursion(1);

?>

<br>
<br>

<?php

function test($j) {
	if ($j == 0) {
		return 1;
	}
	else {
		echo $j;
		test($j - 1);
	}
}


test(5);

?>

<br>
<br>

<?php

$m = 5;

function factorial_of_a_number($n) {
	if ($n == 0) {
		return 1;
	}
	else {
		echo $n . '<br>';
		return $n * factorial_of_a_number($n - 1);
	}
}

print_r(factorial_of_a_number($m)."\n");

?>

<br>
<br>

<?php

function IsPrime($n) {

	for($x = 2; $x < $n; $x++) {

		if($n % $x == 0) {
			return 0;
		}
	}

	return 1;
}

$a = IsPrime(15);

if ($a == 0)
echo 'This is not a Prime number.'."\n";
else
echo 'This is a Prime number.'."\n";

?>

<br>
<br>

<?php

function rectangle($l, $w) {
	$area = $l * $w;
	echo "A rectangle with a length of $l and a width of $w has an area of $area.<br>";
}

rectangle (2.5, 4);

function circle($d) {
	$d /= 2;
	$area = $d * $d * M_PI;
	$area = number_format($area, 2, '.', ' ');
	$d *= 2;
	echo "A circle with a diameter of $d has an area of $area.<br>";
}

circle(1234);

function cuboid($l, $w, $h) {
	$volume = $l * $w * $h;
	echo "A rectangle with a length of $l, a width of $w and a height of $h has a volume of $volume.<br>";
}

cuboid(12, 23, 34);

function cylinder($d, $h) {
	$d /= 2;
	$volume = $d * $d * M_PI * $h;
	$volume = number_format($volume, 2, '.', ' ');
	$d *= 2;
	echo "A cylinder with a diameter of $d and a height of $h has a volume of $volume.<br>";
}

cylinder(3, 4)

?>

<br>
<br>

<?php

