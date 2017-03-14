<html>

<head></head>
<body>

<?php

/* define some variables */
$mean = 9;
$median = 10;
$mode = 9;

print "<h2>Comparison</h2><strong>Mean = 9, Median = 10, Mode = 9</strong><br />";

// less-than operator returns true if left side is less than right
// returns true here
print "<p>Is Mean < Median? <br />";
$result = ($mean < $median);
print "Result is $result</p>";

// greater-than operator returns true if left side is greater than right
// returns false here
print "<p>Is Mean > Median? <br />";
$result = ($mean > $median);
print "Result is $result</p>";

// less-than-or-equal-to operator returns true if left side is less than or equal to right
// returns false here
print "<p>Is Mean <= Median? <br />";
$result = ($median <= $mode);
print "Result is $result</p>";

// greater-than-or-equal-to operator returns true if left side is greater than or equal to right
// returns true here
print "<p>Is Mean >= Median? <br />";
$result = ($median >= $mode);
print "Result is $result</p>";

// equality operator returns true if left side is equal to right
// returns true here
print "<p>Is Mean == Median? <br />";
$result = ($mean == $mode);
print "Result is $result</p>";

// not-equal-to operator returns true if left side is not equal to right
// returns false here
print "<p>Is Mean != Median (not equal)? <br />";
$result = ($mean != $mode);
print "Result is $result</p>";

// inequality operator returns true if left side is not equal to right
// returns false here
print "<p>Is Mean <> Median (not equal)? <br />";
$result = ($mean <> $mode);
print "Result is $result</p>";

?>

<br />

<?php

/* define two variables */
$str = '10';
$int = 10;

print "<h2>Compare type</h2><strong>Str(ing) = '10', Int(eger) = 10</strong><br />";

/* returns true, since both variables contain the same value */
print "<p>Is Str == Int? <br />";
$result = ($str == $int);
print "Result is $result</p>";

/* returns false, since the variables are not of the same type even though they have the same value */
print "<p>Is Str === Int (equal in type)? <br />";
$result = ($str === $int);
print "Result is $result<br />";

/* returns true, since the variables are the same type and value */
print "<p>Is anotherInt == Int? <br />anotherInt = 10<br />";
$anotherInt = 10;
$result = ($anotherInt === $int);
print "Result is $result</p>";

?>

<br />

<?php

/* define some variables */
$auth = 1;
$status = 1;
$role = 4;

print "<h2>Combine- and Logical comparisons</h2><strong>Auth = 1, Status = 1, Role = 4</strong><br />";

/* logical AND returns true if all conditions are true */

// returns true
print "<p>Is Auth = 1 && is Status != 0?<br />";
$result = (($auth == 1) && ($status != 0));
print "Result is $result<br />";

/* logical OR returns true if any condition is true */

// returns true
print "<p>Is Status = 1 || Role <= 2?<br />";
$result = (($status == 1) || ($role <= 2));
print "Result is $result</p>";

/* logical NOT returns true if the condition is false and vice-versa */

// returns false
print "<p>Is ! (not) Status = 1?<br />";
$result = !($status == 1);
print "Result is $result</p>";

/* logical XOR returns true if either of two conditions are true, or returns false if both conditions are true */

// returns false
print "<p>Is Status = 1 XOR Auth = 1?<br />";
$result = (($status == 1) xor ($auth == 1));
print "Result is $result</p>";

?>

<br />

<?php

/* Define some variables */
$one = 1;
$two = 2;
$three = 3;
$four = 4;
$five = 5;
$six = 6;
$seven = 7;
$eight = 8;
$nine = 9;
$ten = 10;
$ten1 = '10';

print "<h2>Compare all the things!</h2><strong>One = 1, Two = 2, etc. Ten1 = '10'.</strong><br />";

// Split formula
$result1 = ($one <= $two);
print "<p>Is one <= two?<br />Result1 is $result1</p>";

$result2 = ($three >= $four);
print "<p>Is three >= four?<br />Result2 is $result2</p>";

$result3 = ($five != 5);
print "<p>Is five != 5?<br />Result3 is $result3</p>";

$result4 = ($six === 6);
print "<p>Is six === 6?<br />Result4 is $result4</p>";

$result5 = ($ten === $ten1);
print "<p>Is ten === ten1?<br />Result5 is $result5</p>";

$resultA = ($result1 && $result2);
print "<p>Is result1 AND result2?<br />ResultA is $resultA</p>";

$resultB = ($result3 || $result4);
print "<p>Is result3 OR result4?<br/>ResultB is $resultB</p>";

$resultC = ($resultA xor $resultB);
//$resultC = ('1' xor '1');
print "<p>Is resultA XOR resultB?<br />ResultC is $resultC</p>";


?>

</body>
</html>