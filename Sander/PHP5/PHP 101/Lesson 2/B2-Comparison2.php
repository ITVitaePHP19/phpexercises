<html>

<head></head>
<body>

<?php

/* define two variables */

$str = '10';
$int = 10;


/* returns true, since both variables contain the same value */

$result = ($str == $int);
print "result is $result<br />";


/* returns false, since the variables are not of the same type even though they have the same value */

$result = ($str === $int);
print "result is $result<br />";


/* returns true, since the variables are the same type and value */
$anotherInt = 10;
$result = ($anotherInt === $int);
print "result is $result";


?>

</body>
</html>