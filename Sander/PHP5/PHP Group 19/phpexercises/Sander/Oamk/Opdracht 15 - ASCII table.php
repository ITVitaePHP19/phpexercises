<html>
<body>

<table>

<?php

for ($i = 0; $i <= 255; $i++) {
	echo "<tr>\n";
	echo "<td>".$i."</td>";
	echo "<td>".dechex($i)."</td>";
	echo "<td>".decoct($i)."</td>";
	echo "<td>".decbin($i)."</td>";
	echo "<td>&#".$i.";</td>";
	echo "<td>".chr($i)."</td>";
	echo "\n</tr>\n";
}

?>

</table>

</body>
</html>