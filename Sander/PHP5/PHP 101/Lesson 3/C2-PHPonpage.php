<html>
<body>

<?php
/* if the "submit" variable does not exist, the form has not been submitted - display initial page */
if (!isset($_POST['submit'])) {
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	Enter your age: <input name="age" size="2">
	<input type="submit" name="submit" value="Go">
</form>

<?php
    }
else {
/* if the "submit" variable exists, the form has been submitted - look for and process form data */
	// display result
	$age = $_POST['age'];
	if ($age >= 21) {
		echo 'Come on in, we have alcohol and music awaiting you!';
		}
	else {
	echo "You're too young for this club, come back when you're a little older";
	}
}
?>

</body>
</html>