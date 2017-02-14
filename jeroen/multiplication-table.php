<!doctype html>
<html>
<head>
<title>multiplication table</title>
</head>
<body>
<h1> multiplication table of 10 </h1>
<table border>
<?php
for($i=1;$i<=10;$i++){
	$multiplication=$i*10;
	echo "<tr><td>".$i." * 10 = ". $multiplication."</td></tr>";
}
?>
</table>
</body>
</html>