<html>
<body>

<?php

$begin = 8;
$end = 16;

echo '<table border="1">';

for ($i = $begin; $i <= $end; $i++) {
	$i = number_format($i, 2);
	echo "<tr><td>".$i."</td></tr>";
}

echo "</table>";

?>

</body>
</html>