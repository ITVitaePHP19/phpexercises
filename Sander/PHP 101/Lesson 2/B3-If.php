<html>
<body>

<?php

// retrieve form data
$age = $_POST['age'];

// check entered value and branch
/*if ($age >= 21) {
	echo 'Come on in, we have alcohol and music awaiting you!';
}

else {
	echo "You're too young for this club, come back when you're a little older";
}*/

/*if (!($age < 21)) {
	echo 'Come on in, we have alcohol and music awaiting you!';
}

else {
	echo "You're too young for this club, come back when you're a little older";
}*/

$msg = $age < 21 ? 'Too young!' : 'Too old!';
echo $msg;

?>

<?php
if ($day == 'Thursday') {
    if ($time == '0800') {
        if ($country == 'UK') {
            $meal = 'bacon and eggs';
        }
    }
}
?>

<?php
if ($day == 'Thursday' && $time == '0800' && $country == 'UK') {
    $meal = 'bacon and eggs';
}
?>

</body>
</html>