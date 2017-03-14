<?php
session_start();
while (isset($_POST['calc1'])) {
	echo '<h1>Calculator</h1><br><form action="calculatorscript.php" method="POST">
		<input type="number" name="first" autocomplete="off"><br>
		<input type="number" name="second" autocomplete="off"><br>
		<input type="submit" name="calc1" value="+">
		<input type="submit" name="calc1" value="-">
		<input type="submit" name="calc1" value="*">
		<input type="submit" name="calc1" value="/">
		<input type="submit" name="calc1" value="%">
		<input type="reset"  name="reset" value="reset"><br>
		<input type="reset"  name="clear" value="clear history">
		</form>';
break;
}
if (isset($_POST['calc1'])) {
	calculator();
}



//if anything in name calc1 is set, run function calculator()
function calculator() {
$first =  $_POST['first'] + 0;
$second=  $_POST['second'] + 0;
$result = $_POST["calc1"];
switch ($result)
{
    case "+":
		$_SESSION['history'] .= $first .$result .$second ."=". ($first + $second)."<br>";
// $_SESSION is called history and stores 3 variables
// echo not needed in the switch, already called outside the switch
    break;
    case "-":
		$_SESSION['history'] .= $first .$result .$second ."=". ($first - $second)."<br>";
    break;
    case "*":
		$_SESSION['history'] .= $first .$result .$second ."=". ($first * $second)."<br>";
    break;
    case "/":
		$_SESSION['history'] .= $first .$result .$second ."=". ($first / $second)."<br>";
    break;
		case "%":
		$_SESSION['history'] .= $first .$result .$second ."=". ($first / 100 * $second)."<br>";
		break;
	}
	echo "<br><br>". $_SESSION['history'];

// if (isset($_POST['clear']))
// {
// unset($_SESSION['history']);
// session_destroy();
// 	}
}

?>
