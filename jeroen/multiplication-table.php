<!doctype html>
<html>
<head>
<title>multiplication table</title>
</head>
<body>
<?php
echo "<table border>";
for($i=1;$i<=10;$i++){
	$multiplication=$i*10;
	echo "<tr><td>".$i." * 10 = ". $multiplication."</td></tr>";
}
echo "</table>";
?>
</body>
</html>
