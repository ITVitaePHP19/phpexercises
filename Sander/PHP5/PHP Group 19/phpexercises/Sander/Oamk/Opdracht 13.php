<html>
<body>

<?php

$begin = 8;
$end = 16;

echo "<table border='1'>\n";

echo "	<tr>
		<td></td>
		<td>Monday</td>
		<td>Tuesday</td>
		<td>Wednesday</td>
		<td>Thursday</td>
		<td>Friday</td>
	</tr>\n	";

for ($i = $begin; $i <= $end; $i++) {
	$i = number_format($i, 2);
	echo "	<tr>
		<td>".$i."</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>\n";
}

echo "</table>\n";

?>

</body>
</html>