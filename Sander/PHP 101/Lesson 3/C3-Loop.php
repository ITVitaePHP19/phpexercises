<html>
<body>

<?php

$total = 10;
// $total++ is functionally equivalent to $total = $total + 1
$total++;

echo $total;

?>

<br />

<?php
$total = 10;
$total--;
echo $total;
?>

<br />
<br />
<br />

<?php

// set variables from form input
$upperLimit = $_POST['limit'];
$lowerLimit = 1;

// keep printing squares until lower limit = upper limit
while ($lowerLimit <= $upperLimit) {
    echo ($lowerLimit * $lowerLimit).'<br />';
    $lowerLimit++;
}
// print end marker
echo 'END';

?>

<br />
<br />
<br />

<?php

// set variables from form input
$upperLimit = $_POST['limit'];
$lowerLimit = 1;
// keep printing squares until lower limit = upper limit

do {
    echo ($lowerLimit * $lowerLimit).'<br />';
    $lowerLimit++;
}
while ($lowerLimit <= $upperLimit);

// print end marker
echo ' END';

?>

</body>
</html>