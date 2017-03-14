<?php
$times = array('8.00','9.00','10.00','11.00','12.00','13.00','14.00','15.00','16.00');
$days = array('','Monday','Tuesday','Wednesday','Thursday','Friday');

$count=0;
echo "<table border>";

foreach($days as $day){
	echo "<th>".$day."</th>";
	$count += count($day);
}

echo "<tr>";

foreach($times as $time){
	echo "<td>".$time."</td>";
	for($i=0; $i < $count-1; $i++){
		echo "<td></td>";
	}
	echo "</tr>";
}

echo "</table>";
echo "<br><br>";
?>