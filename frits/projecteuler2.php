<?php
    ini_set('memory_limit', '1024M'); // or you could use 1G


$sum = 0;
$arr = array();
for($i = 0; $i < 50; $i++) {
	if($i > 1) {
		$arr[$i] = $arr[$i - 1] + $arr[$i - 2];
		if($arr[$i] < 4000000) {
			if($arr[$i] == 2 || $arr[$i] % 2 == 0) $sum += $arr[$i];
		}
		else {
			break;
		}
	}
	else {
		$arr[$i] = $i;
	}
}

echo $sum;
echo "<br/><br/>";
var_dump($arr);

?>