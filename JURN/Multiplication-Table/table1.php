<?php
echo "<table border>";
for($i=1;$i<=10;$i++){
	$multiply=$i*10;
	echo "<tr><td>".$i." * 10 = ". $multiply."</td></tr>";
}
echo "</table>";
?>