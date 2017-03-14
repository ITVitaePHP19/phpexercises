<html>
<body>

<?php

$capital = $_POST['capital'];
$interestYear = $_POST['interest'];
$interestMonth = $interestYear / 12;
$years = $_POST['time'];
$months = $years * 12;
$fixed = $capital / $months;

$calendar[1] = 'January';
$calendar[2] = 'February';
$calendar[3] = 'March';
$calendar[4] = 'April';
$calendar[5] = 'May';
$calendar[6] = 'June';
$calendar[7] = 'July';
$calendar[8] = 'August';
$calendar[9] = 'September';
$calendar[10] = 'October';
$calendar[11] = 'November';
$calendar[12] = 'December';

for ($y = 1; $y <= $years; $y++) {

	echo "<h3>Interest year ".$y.":</h3>\n";
	echo "<table>\n";

	for ($m = 1; $m <= 12; $m++) {
		
		$result = $capital / 100 * $interestMonth + $fixed;

		$result = number_format($result, 2);

		echo "<tr>\n";
		echo "<td>".$calendar[$m]."</td>\n";
		echo "<td>$".$result."</td>";
		echo "</tr>\n";

		$capital = $capital - $fixed;

	}

	echo "</table>\n";

}

?>

</body>
</html>