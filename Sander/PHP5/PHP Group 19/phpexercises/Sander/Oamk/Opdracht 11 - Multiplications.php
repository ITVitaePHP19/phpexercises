<html>
<body>

<?php

$max = 10;
$table = 10;

echo "<table>";

for ($i = 1; $i <= $max; $i++) {
	echo "<tr><td>".$i." * ".$table." = ".($i * $table)."</td></tr>";
}

echo "</table>";

?>

</body>
</html>