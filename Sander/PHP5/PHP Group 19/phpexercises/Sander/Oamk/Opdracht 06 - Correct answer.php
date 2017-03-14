<html>
<body>

<?php
 
$answer = $_POST['answer'];

$totalCorrect = 0;

if ($answer == "3") {
	echo "Correct!";
}

else {
	echo "Nope. Try again.";
}

?>

</body>
</html>