
<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Calculator</title>
</head>
<body>
Calculator<br>
<?php
include 'calculatorscript.php';
?>

<form action="calculatorscript.php" method="POST">
			<input type="number" name="first" autocomplete="off"><br>
			<input type="number" name="second" autocomplete="off"><br>
		  <input type="submit" name="calc1" value="+">
		  <input type="submit" name="calc1" value="-">
			<input type="submit" name="calc1" value="*">
		  <input type="submit" name="calc1" value="/">
			<input type="submit" name="calc1" value="%">
		  <input type="reset"  name="reset" value="reset"><br>
			<input type="submit"  name="clear" value="clear history">
</form>
</body>
</html>
