<html>
<body>

<?php
if (!isset($_POST['submit'])) {
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Leeftijd: <input type="text" name="age" size="4" />
<input type="submit" name="submit" value="submit" />

<?php

}

else {
	$age = $_POST['age'];

	$lower = (220-$age)*0.65;
	$upper = (220-$age)*0.85;

	echo "Your lower limit is ".$lower." BPM<br />";
	echo "Your upper limit is ".$upper." BPM<br />";
}

?>