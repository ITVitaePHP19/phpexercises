<html>

<head>
	<title>Test</title>
</head>

<body>

<?php
echo 'Now:       '. date('Y-m-d') . PHP_EOL . "<br>";

$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
echo 'Next Week: '. date('Y-m-d', $nextWeek) . PHP_EOL . "<br>";

// or using strtotime():
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) . PHP_EOL . "<br>";
?>

<br>
<br>

<?php

function time_elapsed_A($secs){
	$bit = array(
		'y'			=> $secs / 31556926 % 12,
		'w'			=> $secs / 604800 % 52,
		'd'			=> $secs / 86400 % 7,
		'h'			=> $secs / 3600 % 24,
		'm'			=> $secs / 60 % 60,
		's'			=> $secs % 60
		);
        
	foreach($bit as $k => $v)
		if ($v > 0)
			$ret[] = $v . $k;
	
	return join(' ', $ret);
}
    

function time_elapsed_B($secs){
	$bit = array(
		' year'		=> $secs / 31556926 % 12,
		' week'		=> $secs / 604800 % 52,
		' day'		=> $secs / 86400 % 7,
		' hour'		=> $secs / 3600 % 24,
		' minute'	=> $secs / 60 % 60,
		' second'	=> $secs % 60
		);
        
    foreach($bit as $k => $v){
		if ($v > 1)
			$ret[] = $v . $k . 's';

		if ($v == 1)
			$ret[] = $v . $k;
	}
	
	array_splice($ret, count($ret)-1, 0, 'and');

	$ret[] = 'ago.';
	
	return join(' ', $ret);
}
    

function time_elapsed_C($secs){

    $bit = array(
        ' year'		=> $secs / 31556926 % 12,
        ' week'		=> $secs / 604800 % 52,
        ' day'		=> $secs / 86400 % 7,
        ' hour'		=> $secs / 3600 % 24,
        ' minute'	=> $secs / 60 % 60,
        ' second'	=> $secs % 60
        );

	return join(' ', $bit);
}

$nowtime = time();
$oldtime = 1335939007;

echo "time_elapsed_A: ".time_elapsed_A($nowtime-$oldtime) . PHP_EOL . "<br>";
echo "time_elapsed_B: ".time_elapsed_B($nowtime-$oldtime) . PHP_EOL . "<br>";
echo "time_elapsed_C: ".time_elapsed_C($nowtime-$oldtime) . PHP_EOL . "<br>";


/** Output:
time_elapsed_A: 6d 15h 48m 19s
time_elapsed_B: 6 days 15 hours 48 minutes and 19 seconds ago.
**/

?>

<br>
<br>

<?php
class foo {
   // As of PHP 5.3.0
   public $bar = <<<'EOT'
bar
EOT;
   public $baz = <<<EOT
baz
EOT;
}
?>

</body>
</html>