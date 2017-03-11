<html>
<body>

<?php

$x = 100;
// do-while loop
do {
    echo "Running...";
    break;
}
while ($x == 700);

?>

<br />
<br />
<br />

<?php

// define the number
$number = 13;
// use a for loop to calculate tables for that number
for ($x = 1; $x <= 10; $x++) {

    echo "$number x $x = ".($number * $x).".<br />";
}

?>

<br />
<br />
<br />

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Enter number of rows <input name="rows" type="number" size="2"> and columns <input name="columns" type="number" size="4"> <input type="submit" name="submit" value="Draw Table">

</form>

<?php

if (isset($_POST['submit'])) {
	echo "<table width=100% border = '1'>";
	
	$rows = $_POST['rows'];
	$columns = $_POST['columns'];
	$r = 1;
	$c = 1;

	// Loop to create rows
	while ($r <= $rows) {
		echo "<tr>";

		// Loop to create columns
		while ($c <= $columns) {
			echo "<td>&nbsp;</td>";
			$c++;
		}
		echo "</tr>";		
		$r++;

		// Reset $c
		$c = 1;
	}
	echo "</table>";
}

?>

<br />

<?php

if (isset($_POST['submit'])) {
	echo "<table width=100% border = '1'>";
	
	$rows = $_POST['rows'];
	$columns = $_POST['columns'];
	$r = 1;
	$c = 1;

	// Loop to create rows
	do {
		echo "<tr>";

		// Loop to create columns
		do {
			echo "<td>&nbsp;</td>";
			$c++;
		}
		while ($c <= $columns);

		// Reset $c, close row and increment $r
		$c = 1;
		echo "</tr>";
		$r++;
	}
	while ($r <= $rows);
	echo "</table>";
}

?>

<br />

<?php

if (isset($_POST['submit'])) {
	echo "<table width=100% border='1'>";
	
	$rows = $_POST['rows'];
	$columns = $_POST['columns'];

	// loop to create rows
	for ($r = 1; $r <= $rows; $r++) {
	echo "<tr>";
		// loop to create columns
		for ($c = 1; $c <= $columns;$c++) {
			echo "<td>&nbsp;</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

?>

<br />
<br />
<br />

<?php

// define the number
$number = 13;
// use a for loop to calculate tables for that number
for ($x = 1; $x <= 10; $x++) {
    echo "$number x $x = ".($number * $x).".<br />";
}

?>

<br />
<br />
<br />

<?php

$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
	echo "<br />";
}

?>

</body>
</html>