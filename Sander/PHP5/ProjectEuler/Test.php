<html>
<body>

<?php

$expenses = array(12, 45, 10, 25);
$total = 0;

for($i = 0; $i < count($expenses); $i++)
	$total += $expenses[$i];
	echo "Total $total\n";
	echo "<br />";
	echo "Average ".($total / $i);
?>

<br />
<br />

<?php
$expenses = array(12, 45, 10, 25);
$total = 0;

foreach($expenses as $value)
	$total += $value;
	echo "Total $total\n";
	echo "<br />";
	echo "Average ".($total / count($expenses));
?>

<br />
<br />

<?php
echo 'This is a simple string. ';

echo 'You can also have embedded newlines in 
strings this way as it is
okay to do. ';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back" ';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*? ';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*? ';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline ';

// Outputs: This will expand:
// a newline
echo "This will expand: \n a newline ";

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either ';
?>

</body>
</html>