<?php
$j = 0;
for($i = 0; $i < 1000; $i++) {
	if($i % 3 == 0) $j += $i;
	else if($i % 5 == 0) $j += $i;
}
echo $j;


?>